document.addEventListener('DOMContentLoaded', function () {
    const nextSteps = document.querySelectorAll('.next-step');
    const prevSteps = document.querySelectorAll('.prev-step');
    const steps = document.querySelectorAll('.form-step');
    const indicators = document.querySelectorAll('.step-indicator');

    let currentStep = 0;

    nextSteps.forEach(button => {
        button.addEventListener('click', () => {
            if (currentStep < steps.length - 1) {
                steps[currentStep].classList.remove('active');
                indicators[currentStep].classList.remove('active');
                currentStep++;
                steps[currentStep].classList.add('active');
                indicators[currentStep].classList.add('active');
            }
        });
    });

    prevSteps.forEach(button => {
        button.addEventListener('click', () => {
            if (currentStep > 0) {
                steps[currentStep].classList.remove('active');
                indicators[currentStep].classList.remove('active');
                currentStep--;
                steps[currentStep].classList.add('active');
                indicators[currentStep].classList.add('active');
            }
        });
    });
});
