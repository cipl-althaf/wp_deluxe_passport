document.addEventListener("DOMContentLoaded", function () {
    initHamburgerMenu();
    initTestimonialSlider();
    initFaqAccordion();
    initLoginPasswordToggle();
    initRegisterPasswordToggle();
    initLoginRegisterToggle();
    initProfilePasswordToggle();
    initProfileSettingsMenu();
    initPersonalInfoEdit();
    initCheckoutPaymentMethods();
    initFeesPage();
    initApplicationSetup();
});

function initHamburgerMenu() {
    const hamburgerBtn = document.getElementById("hamburgerBtn");
    const headerNav = document.getElementById("headerNav");

    if (!hamburgerBtn || !headerNav) return;

    hamburgerBtn.addEventListener("click", function () {
        const isOpen = headerNav.classList.toggle("is-open");
        hamburgerBtn.classList.toggle("is-active", isOpen);
        hamburgerBtn.setAttribute("aria-expanded", isOpen ? "true" : "false");
        document.body.classList.toggle("menu-open", isOpen);
    });
}

function initTestimonialSlider() {
    const testimonialSlider = document.getElementById("testimonialSlider");
    if (!testimonialSlider) return;

    const testimonialTrack = testimonialSlider.querySelector(".testimonial-track");
    if (!testimonialTrack || !testimonialTrack.children.length) return;

    const testimonialCards = [...testimonialTrack.children];
    const testimonialPrev = document.querySelector(".testimonial-prev");
    const testimonialNext = document.querySelector(".testimonial-next");
    let testimonialIndex = 0;
    let testimonialTimer;

    function getTestimonialStep() {
        const gap = parseFloat(getComputedStyle(testimonialTrack).gap) || 0;
        return testimonialCards[0].getBoundingClientRect().width + gap;
    }

    function getMaxTestimonialIndex() {
        
        const step = getTestimonialStep();
        return Math.max(0, Math.ceil((testimonialTrack.scrollWidth - testimonialSlider.clientWidth) / step));
    }

    function showTestimonial(index) {
        testimonialIndex = Math.max(0, Math.min(index, getMaxTestimonialIndex()));
        const maxOffset = testimonialTrack.scrollWidth - testimonialSlider.clientWidth;
        const offset = Math.min(testimonialIndex * getTestimonialStep(), maxOffset);
        testimonialTrack.style.transform = "translateX(-" + Math.max(0, offset) + "px)";
    }

    function nextTestimonial() {
        const maxIndex = getMaxTestimonialIndex();
        showTestimonial(testimonialIndex >= maxIndex ? 0 : testimonialIndex + 1);
    }

    function startTestimonialSlider() {
        clearInterval(testimonialTimer);
        testimonialTimer = setInterval(nextTestimonial, 3500);
    }

    if (testimonialPrev) {
        testimonialPrev.addEventListener("click", function () {
            showTestimonial(testimonialIndex <= 0 ? getMaxTestimonialIndex() : testimonialIndex - 1);
            startTestimonialSlider();
        });
    }

    if (testimonialNext) {
        testimonialNext.addEventListener("click", function () {
            nextTestimonial();
            startTestimonialSlider();
        });
    }

    testimonialSlider.addEventListener("mouseenter", function () {
        clearInterval(testimonialTimer);
    });
    testimonialSlider.addEventListener("mouseleave", startTestimonialSlider);
    testimonialSlider.addEventListener("focusin", function () {
        clearInterval(testimonialTimer);
    });
    testimonialSlider.addEventListener("focusout", startTestimonialSlider);
    window.addEventListener("resize", function () {
        showTestimonial(testimonialIndex);
    });
    startTestimonialSlider();
}

function initFaqAccordion() {
    const faqItems = document.querySelectorAll(".faq-item");
    if (!faqItems.length) return;

    faqItems.forEach(function (item) {
        const button = item.querySelector(".faq-question");
        if (!button) return;

        button.addEventListener("click", function () {
            const willOpen = !item.classList.contains("is-open");

            faqItems.forEach(function (faqItem) {
                faqItem.classList.remove("is-open");
                const faqButton = faqItem.querySelector(".faq-question");
                if (faqButton) {
                    faqButton.setAttribute("aria-expanded", "false");
                }
            });

            if (willOpen) {
                item.classList.add("is-open");
                button.setAttribute("aria-expanded", "true");
            }
        });
    });
}
function initLoginPasswordToggle() {
    const passwordInput = document.getElementById("loginPassword");
    const passwordToggle = document.getElementById("passwordToggle");
    if (!passwordInput || !passwordToggle) return;
    const passwordIcon = passwordToggle.querySelector("img");
    if (!passwordIcon) return;
    passwordToggle.addEventListener("click", function () {
        const isVisible = passwordInput.type === "text";
        passwordInput.type = isVisible ? "password" : "text";
        passwordIcon.src = isVisible ? "./images/eye-slash.svg" : "./images/eye.svg";
        passwordToggle.setAttribute("aria-label", isVisible ? "Show password" : "Hide password");
    });
}
function initRegisterPasswordToggle() {
    const passwordInput = document.getElementById("registerPassword");
    const passwordToggle = document.getElementById("registerPasswordToggle");
    if (!passwordInput || !passwordToggle) return;

    const passwordIcon = passwordToggle.querySelector("img");
    if (!passwordIcon) return;

    passwordToggle.addEventListener("click", function () {
        const isVisible = passwordInput.type === "text";
        passwordInput.type = isVisible ? "password" : "text";
        passwordIcon.src = isVisible ? "./images/eye-slash.svg" : "./images/eye.svg";
        passwordToggle.setAttribute("aria-label", isVisible ? "Show password" : "Hide password");
    });
}
function initLoginRegisterToggle() {
    const loginView = document.getElementById("loginView");
    const registerView = document.getElementById("registerView");
    const forgotView = document.getElementById("forgotView");
    const verifyView = document.getElementById("verifyView");
    const resetView = document.getElementById("resetView");
    const showRegisterBtn = document.getElementById("showRegisterBtn");
    const showLoginBtn = document.getElementById("showLoginBtn");
    const showForgotBtn = document.getElementById("showForgotBtn");
    const showLoginFromForgotBtn = document.getElementById("showLoginFromForgotBtn");
    const forgotForm = document.getElementById("forgotForm");
    const verifyForm = document.getElementById("verifyForm");
    const resetForm = document.getElementById("resetForm");
    const forgotEmail = document.getElementById("forgotEmail");
    const verifyEmailText = document.getElementById("verifyEmailText");
    const verifyOtp = document.getElementById("verifyOtp");
    const verifyTimer = document.getElementById("verifyTimer");
    const resendCodeBtn = document.getElementById("resendCodeBtn");

    if (!loginView || !registerView || !showRegisterBtn || !showLoginBtn) return;

    const views = [loginView, registerView, forgotView, verifyView, resetView].filter(Boolean);
    let timerInterval = null;
    let remainingSeconds = 30;

    function showView(activeView) {
        views.forEach(function (view) {
            const isActive = view === activeView;
            view.hidden = !isActive;
            view.classList.toggle("is-active", isActive);
        });
    }

    function formatTimer(seconds) {
        const mins = String(Math.floor(seconds / 60)).padStart(2, "0");
        const secs = String(seconds % 60).padStart(2, "0");
        return mins + ":" + secs;
    }

    function stopVerifyTimer() {
        if (timerInterval) {
            clearInterval(timerInterval);
            timerInterval = null;
        }
    }

    function startVerifyTimer() {
        if (!verifyTimer || !resendCodeBtn) return;

        stopVerifyTimer();
        remainingSeconds = 30;
        verifyTimer.textContent = formatTimer(remainingSeconds);
        resendCodeBtn.disabled = true;

        timerInterval = setInterval(function () {
            remainingSeconds -= 1;
            verifyTimer.textContent = formatTimer(Math.max(remainingSeconds, 0));

            if (remainingSeconds <= 0) {
                stopVerifyTimer();
                resendCodeBtn.disabled = false;
            }
        }, 1000);
    }

    function bindPasswordToggle(inputId, toggleId) {
        const passwordInput = document.getElementById(inputId);
        const passwordToggle = document.getElementById(toggleId);
        if (!passwordInput || !passwordToggle) return;

        const passwordIcon = passwordToggle.querySelector("img");
        if (!passwordIcon) return;

        passwordToggle.addEventListener("click", function () {
            const isVisible = passwordInput.type === "text";
            passwordInput.type = isVisible ? "password" : "text";
            passwordIcon.src = isVisible ? "./images/eye-slash.svg" : "./images/eye.svg";
            passwordToggle.setAttribute("aria-label", isVisible ? "Show password" : "Hide password");
        });
    }

    function initOtpInputs() {
        if (!verifyOtp) return;

        const inputs = [...verifyOtp.querySelectorAll(".verify-otp-input")];

        inputs.forEach(function (input, index) {
            input.addEventListener("input", function () {
                input.value = input.value.replace(/\D/g, "").slice(0, 1);
                if (input.value && index < inputs.length - 1) {
                    inputs[index + 1].focus();
                }
            });

            input.addEventListener("keydown", function (event) {
                if (event.key === "Backspace" && !input.value && index > 0) {
                    inputs[index - 1].focus();
                }
            });

            input.addEventListener("paste", function (event) {
                event.preventDefault();
                const pasted = (event.clipboardData || window.clipboardData).getData("text").replace(/\D/g, "").slice(0, inputs.length);
                pasted.split("").forEach(function (digit, digitIndex) {
                    if (inputs[digitIndex]) {
                        inputs[digitIndex].value = digit;
                    }
                });
                const focusIndex = Math.min(pasted.length, inputs.length - 1);
                inputs[focusIndex].focus();
            });
        });
    }

    function showLogin() {
        stopVerifyTimer();
        showView(loginView);
    }

    function showRegister() {
        stopVerifyTimer();
        showView(registerView);
    }

    function showForgot() {
        if (!forgotView) return;
        stopVerifyTimer();
        showView(forgotView);
    }

    function showVerify() {
        if (!verifyView) return;
        showView(verifyView);
        startVerifyTimer();

        if (verifyOtp) {
            const firstInput = verifyOtp.querySelector(".verify-otp-input");
            if (firstInput) firstInput.focus();
        }
    }

    function showReset() {
        if (!resetView) return;
        stopVerifyTimer();
        showView(resetView);
    }

    initOtpInputs();
    bindPasswordToggle("resetNewPassword", "resetNewPasswordToggle");
    bindPasswordToggle("resetConfirmPassword", "resetConfirmPasswordToggle");

    showRegisterBtn.addEventListener("click", function (event) {
        event.preventDefault();
        showRegister();
    });

    showLoginBtn.addEventListener("click", function (event) {
        event.preventDefault();
        showLogin();
    });

    if (showForgotBtn) {
        showForgotBtn.addEventListener("click", function (event) {
            event.preventDefault();
            showForgot();
        });
    }

    if (showLoginFromForgotBtn) {
        showLoginFromForgotBtn.addEventListener("click", function (event) {
            event.preventDefault();
            showLogin();
        });
    }

    if (forgotForm) {
        forgotForm.addEventListener("submit", function (event) {
            event.preventDefault();
            if (verifyEmailText && forgotEmail) {
                verifyEmailText.textContent = forgotEmail.value.trim() || "user@gmail.com";
            }
            showVerify();
        });
    }

    if (verifyForm) {
        verifyForm.addEventListener("submit", function (event) {
            event.preventDefault();
            showReset();
        });
    }

    if (resetForm) {
        resetForm.addEventListener("submit", function (event) {
            event.preventDefault();
            const newPassword = document.getElementById("resetNewPassword");
            const confirmPassword = document.getElementById("resetConfirmPassword");

            if (newPassword && confirmPassword && newPassword.value !== confirmPassword.value) {
                confirmPassword.setCustomValidity("Passwords do not match");
                confirmPassword.reportValidity();
                confirmPassword.setCustomValidity("");
                return;
            }

            showLogin();
        });
    }

    if (resendCodeBtn) {
        resendCodeBtn.addEventListener("click", function () {
            if (resendCodeBtn.disabled) return;
            startVerifyTimer();
        });
    }
}

function initProfilePasswordToggle() {
    const passwordInput = document.getElementById("profilePassword");
    const passwordToggle = document.getElementById("profilePasswordToggle");
    if (!passwordInput || !passwordToggle) return;

    const passwordIcon = passwordToggle.querySelector("img");
    if (!passwordIcon) return;

    passwordToggle.addEventListener("click", function () {
        const isVisible = passwordInput.type === "text";
        passwordInput.type = isVisible ? "password" : "text";
        passwordIcon.src = isVisible ? "./images/eye-slash.svg" : "./images/eye.svg";
        passwordToggle.setAttribute("aria-label", isVisible ? "Show password" : "Hide password");
    });
}

function initProfileSettingsMenu() {
    const menuItems = document.querySelectorAll(".profile-menu-item[data-panel]");
    const panels = document.querySelectorAll(".profile-panel");
    if (!menuItems.length || !panels.length) return;

    menuItems.forEach(function (item) {
        item.addEventListener("click", function (event) {
            event.preventDefault();
            const panelName = item.getAttribute("data-panel");

            menuItems.forEach(function (menuItem) {
                menuItem.classList.toggle("is-active", menuItem === item);
            });

            panels.forEach(function (panel) {
                const isMatch = panel.getAttribute("data-panel") === panelName;
                panel.classList.toggle("is-active", isMatch);
                panel.hidden = !isMatch;
            });
        });
    });
}

function initPersonalInfoEdit() {
    const personalEditBtn = document.getElementById("personalEditBtn");
    const personalCancelBtn = document.getElementById("personalCancelBtn");
    const personalInfoView = document.getElementById("personalInfoView");
    const personalInfoEdit = document.getElementById("personalInfoEdit");
    const personalInfoCard = document.getElementById("personalInfoCard");

    if (!personalEditBtn || !personalCancelBtn || !personalInfoView || !personalInfoEdit || !personalInfoCard) {
        return;
    }

    function showPersonalView() {
        personalInfoView.hidden = false;
        personalInfoEdit.hidden = true;
        personalEditBtn.hidden = false;
        personalInfoCard.classList.remove("is-editing");
    }

    function showPersonalEdit() {
        personalInfoView.hidden = true;
        personalInfoEdit.hidden = false;
        personalEditBtn.hidden = true;
        personalInfoCard.classList.add("is-editing");
    }

    personalEditBtn.addEventListener("click", function () {
        showPersonalEdit();
    });

    personalCancelBtn.addEventListener("click", function () {
        showPersonalView();
    });

    personalInfoEdit.addEventListener("submit", function (event) {
        event.preventDefault();

        const fields = [
            "firstName",
            "lastName",
            "email",
            "dob",
            "mobile",
            "altMobile",
            "currentAddress",
            "permanentAddress",
            "city",
            "state",
            "pincode",
            "nationality"
        ];

        fields.forEach(function (field) {
            const input = personalInfoEdit.querySelector('[name="' + field + '"]');
            const output = personalInfoView.querySelector('[data-field="' + field + '"]');
            if (input && output) {
                output.textContent = input.value;
            }
        });

        showPersonalView();
    });
}

function initCheckoutPaymentMethods() {
    const paymentInputs = document.querySelectorAll('input[name="paymentMethod"]');
    if (!paymentInputs.length) return;

    paymentInputs.forEach(function (input) {
        input.addEventListener("change", function () {
            document.querySelectorAll(".checkout-method").forEach(function (method) {
                method.classList.toggle("is-open", method.dataset.method === input.value && input.value === "card");
            });
        });
    });
}

function initFeesPage() {
    const applicantName = document.getElementById("feesApplicantName");
    const serviceLegend = document.getElementById("feesServiceLegend");
    const applicantTabs = document.querySelectorAll(".fees-applicant-tab");
    const serviceInputs = document.querySelectorAll(".fees-service-card input");

    if (applicantTabs.length && applicantName && serviceLegend) {
        applicantTabs.forEach(function (tab) {
            tab.addEventListener("click", function () {
                applicantTabs.forEach(function (item) {
                    item.classList.remove("is-active");
                });
                tab.classList.add("is-active");
                applicantName.textContent = tab.dataset.name;
                serviceLegend.textContent = "Select Passport Service For " + tab.dataset.name;
            });
        });
    }

    if (serviceInputs.length) {
        serviceInputs.forEach(function (radio) {
            radio.addEventListener("change", function () {
                document.querySelectorAll(".fees-service-card").forEach(function (card) {
                    card.classList.remove("is-selected");
                });
                radio.closest(".fees-service-card").classList.add("is-selected");
            });
        });
    }
}

function initApplicationSetup() {
    const addApplicantButton = document.getElementById("applicationAddApplicant");
    const applicantsContainer = document.getElementById("applicationApplicants");
    const applicantTemplate = document.getElementById("applicationApplicantTemplate");

    if (!addApplicantButton || !applicantsContainer || !applicantTemplate) return;

    let applicantCount = 1;

    addApplicantButton.addEventListener("click", function () {
        if (applicantCount >= 3) return;

        applicantCount += 1;
        const applicant = applicantTemplate.content.firstElementChild.cloneNode(true);
        applicant.dataset.applicant = applicantCount;
        applicant.querySelector(".application-applicant-title").textContent = "Applicant " + applicantCount;

        const fieldNames = ["FirstName", "LastName", "BirthDate"];
        applicant.querySelectorAll(".application-field").forEach(function (field, index) {
            const input = field.querySelector("input");
            const label = field.querySelector("label");
            const id = "application" + fieldNames[index] + applicantCount;
            input.id = id;
            input.name = id;
            label.htmlFor = id;
        });

        applicantsContainer.appendChild(applicant);
        if (applicantCount === 3) {
            addApplicantButton.disabled = true;
        }
    });
}
