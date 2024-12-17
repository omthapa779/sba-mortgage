function calculateRepayment() {
    const loanAmount = parseFloat(document.getElementById('loanAmount').value);
    const interestRate = parseFloat(document.getElementById('interestRate').value) / 100;
    const loanTerm = parseInt(document.getElementById('loanTerm').value);
    const repaymentFrequency = document.getElementById('repaymentFrequency').value;
    const loanFee = parseFloat(document.getElementById('loanFee').value);
    const feeFrequency = document.getElementById('feeFrequency').value;

    // Frequency-based multiplier for repayments
    const frequencyMultiplier = {
        monthly: 12,
        yearly: 1,
        fortnightly: 26,
        weekly: 52,
    };

    const repaymentsPerYear = frequencyMultiplier[repaymentFrequency];
    const feeFrequencyMultiplier = frequencyMultiplier[feeFrequency];

    // Convert loan fee to the same frequency as repayments
    const adjustedLoanFee = (loanFee * repaymentsPerYear) / feeFrequencyMultiplier;

    // Calculate monthly interest rate
    const monthlyInterestRate = interestRate / repaymentsPerYear;

    // Total number of repayments
    const totalRepayments = repaymentsPerYear * loanTerm;

    // Calculate monthly repayment using annuity formula
    const monthlyRepayment =
        (loanAmount * monthlyInterestRate) /
        (1 - Math.pow(1 + monthlyInterestRate, -totalRepayments));

    const totalInterestPayable = monthlyRepayment * totalRepayments - loanAmount;
    const totalFeePayable = adjustedLoanFee * totalRepayments;
    const totalPayments = loanAmount + totalInterestPayable + totalFeePayable;

    // Display results
    document.getElementById('monthlyRepayment').textContent = monthlyRepayment.toFixed(2);
    document.getElementById('totalInterestFee').textContent = (totalInterestPayable + totalFeePayable).toFixed(2);
    document.getElementById('totalPayments').textContent = totalPayments.toFixed(2);
}

// Set default values
document.getElementById('loanAmount').value = 400000;
document.getElementById('interestRate').value = 6;
document.getElementById('loanTerm').value = 30;
document.getElementById('repaymentFrequency').value = 'monthly';
document.getElementById('loanFee').value = 0;
document.getElementById('feeFrequency').value = 'monthly';

// Run calculation on page load
window.addEventListener('DOMContentLoaded', (event) => {
    calculateRepayment();
});