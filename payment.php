<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <script>
    function paymentMethodChange(method) {
        resetValidationMessages();
        document.getElementById('creditCardDetails').style.display = method === 'CreditCard' ? '' : 'none';
        document.getElementById('bankTransferDetails').style.display = method === 'BankTransfer' ? '' : 'none';
        document.getElementById('eWalletDetails').style.display = method === 'EWallet' ? '' : 'none';
    }

    function resetValidationMessages() {
        const errorMessages = document.querySelectorAll('.error-message');
        errorMessages.forEach(function(message) {
            message.remove();
        });
    }

    function validateForm() {
        let isValid = true;
        resetValidationMessages();

        const paymentMethod = document.getElementById('paymentMethod').value;
        const sectionId = paymentMethod + 'Details';
        const section = document.getElementById(sectionId);

        if (paymentMethod === 'CreditCard') {
            isValid = validateCreditCardForm(section) && isValid;
        } else if (paymentMethod === 'BankTransfer') {
            isValid = validateBankTransferForm(section) && isValid;
        } else if (paymentMethod === 'EWallet') {
            isValid = validateEWalletForm(section) && isValid;
        }

        return isValid; 
    }

    function validateCreditCardForm(section) {
        let isValid = true;
        
        const cardNumber = section.querySelector('#cardNumber');
        if (cardNumber && cardNumber.value && !/^\d{16}$/.test(cardNumber.value)) {
            showErrorMessage(cardNumber, 'Credit card number must be 16 digits.');
            isValid = false;
        }
        
        const name = section.querySelector('#name'); // Corrected to query within section
        if (name && name.value && !/^[a-zA-Z\s]+$/.test(name.value)) {
            showErrorMessage(name, 'Name must only contain letters and spaces.');
            isValid = false;
        }

        const month = section.querySelector('#expMonth'); // Corrected ID reference
        if (month && month.value) {
            const monthValue = parseInt(month.value, 10);
            if (isNaN(monthValue) || monthValue < 1 || monthValue > 12) {
                showErrorMessage(month, 'Month must be between 1 and 12.');
                isValid = false;
            }
        }
        
        const year = section.querySelector('#expYear'); // Corrected to query within section
        if (year && year.value && !/^\d{4}$/.test(year.value)) {
            showErrorMessage(year, 'Year must be 4 digits.');
            isValid = false;
        }

        const cvv = section.querySelector('#cvv'); // Corrected to query within section
        if (cvv && cvv.value && !/^\d{3}$/.test(cvv.value)) {
            showErrorMessage(cvv, 'CVV must be 3 digits.');
            isValid = false;
        }
        return isValid;
    }

    function validateBankTransferForm(section){
        let isValid = true;
        const bankName = section.querySelector('#bankName');
        if (bankName && bankName.value && !/^[a-zA-Z\s]+$/.test(bankName.value)) {
            showErrorMessage(bankName, 'Bank name must only contain letters.');
            isValid = false;
        }
        
        const accountNumber = section.querySelector('#accountNumber'); // Corrected ID reference
        if (accountNumber && accountNumber.value && !/^\d{12}$/.test(accountNumber.value)) {
            showErrorMessage(accountNumber, 'Account number must be 12 digits.'); // Corrected message and variable
            isValid = false;
        }
        return isValid;
    }

    function validateEWalletForm(section){
        let isValid = true;
        const eWalletEmail = section.querySelector('#eWalletEmail');
        if (eWalletEmail && eWalletEmail.value && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(eWalletEmail.value)) {
            showErrorMessage(eWalletEmail, 'Invalid email format.');
            isValid = false;
        }
        return isValid;
    }

    // Function to show error messages
    function showErrorMessage(inputElement, message) {
        const errorMessage = document.createElement('div');
        errorMessage.textContent = message;
        errorMessage.classList.add('error-message');
        errorMessage.style.color = 'red';
        inputElement.parentNode.appendChild(errorMessage);
    }

    document.addEventListener('DOMContentLoaded', (event) => {
        document.getElementById('paymentForm').onsubmit = function(event) {
            if (!validateForm()) {
                event.preventDefault();
            }
        };
    });
    </script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            margin-top: 40px;
        }
        .payment-section {
            display: none;
        }
        .payment-section.active {
            display: block;
        }
        .form-control, .btn-primary {
            border-radius: 20px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px 24px;
            font-size: 18px;
        }
        .payment-header {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2>Payment Details</h2>
    <form id="paymentForm" action="process_payment.php" method="POST">
        <div class="form-group">
            <label for="paymentMethod">Payment Method</label>
            <select class="form-control" id="paymentMethod" name="paymentMethod" onchange="paymentMethodChange(this.value)">
                <option value="CreditCard">Credit Card</option>
                <option value="BankTransfer">Bank Transfer</option>
                <option value="EWallet">E-Wallet</option>
            </select>
        </div>

        <div id="creditCardDetails">
            <div class="form-group">
                <label for="name">Name on Card</label>
                <input type="text" class="form-control" id="name" name="name" >
            </div>
            <div class="form-group">
                <label for="cardNumber">Credit Card Number</label>
                <input type="text" class="form-control" id="cardNumber" name="cardNumber" minlength="16" maxlength="16" >
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="expMonth">Expiration Month</label>
                    <input type="text" class="form-control" id="expMonth" name="expMonth" >
                </div>
                <div class="col-md-4 mb-3">
                    <label for="expYear">Expiration Year</label>
                    <input type="text" class="form-control" id="expYear" name="expYear" >
                </div>
                <div class="col-md-4 mb-3">
                    <label for="cvv">CVV</label>
                    <input type="text" class="form-control" id="cvv" name="cvv" minlength="3" maxlength="4" >
                </div>
            </div>
        </div>

        <div id="bankTransferDetails" style="display:none;">
            <div class="form-group">
                <label for="bankName">Bank Name</label>
                <input type="text" class="form-control" id="bankName" name="bankName" >
            </div>
            <div class="form-group">
                <label for="accountNumber">Account Number</label>
                <input type="text" class="form-control" id="accountNumber" name="accountNumber">
            </div>
        </div>

        <div id="eWalletDetails" style="display:none;">
            <div class="form-group">
                <label for="eWalletType">E-Wallet Type</label>
                <select class="form-control" id="eWalletType" name="eWalletType">
                    <option value="PayPal">PayPal</option>
                    <option value="Venmo">Venmo</option>
                    <option value="CashApp">CashApp</option>
                </select>
            </div>
            <div class="form-group">
                <label for="eWalletEmail">E-Wallet Email</label>
                <input type="email" class="form-control" id="eWalletEmail" name="eWalletEmail">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Submit Payment</button>
    </form>
</div>

</body>
</html>