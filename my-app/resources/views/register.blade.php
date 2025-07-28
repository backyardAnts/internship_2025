@extends('layouts.app')

@section('header')
    @include('partials.connectheader')
@endsection

@section('content')
<form action="/register" method="POST">
    @csrf
    <div class="container-sub">
        <h1>1. Inscription</h1>
        <p>Vous n’avez pas de compte ? Inscrivez-vous ci-dessous.</p>

        <div class="row">
            <div class="input-group">
                <label>Nom et Prénom</label>
                <input type="text" name="name" placeholder="">
            </div>
            <div class="input-group">
                <label>Adresse e-mail</label>
                <input type="email" name="email" placeholder="">
            </div>
        </div>

        <div class="input-group">
            <label>Mot de passe</label>
            <div class="password-wrapper">
                <input type="password" name="password" placeholder="">
                <span class="toggle-password">👁️</span>
            </div>
        </div>

        <div class="row">
            <div class="input-group select-group">
                <label>Téléphone mobile</label>
                <select name="country_code">
                    <option>+961</option>
                    <option>+33</option>
                    <option>+1</option>
                </select>
            </div>
            <div class="input-group">
                <label>&nbsp;</label>
                <input type="tel" name="phone" placeholder="">
            </div>
        </div>

        <div class="footer-text">
            Vous avez déjà un compte? <a href="#">Connectez-vous ici</a>
        </div>
    </div>

    <div class="donation-section-container">
        <h2 class="donation-title">2. Et si vous alliez plus loin ? <span class="donation-optional">(Optionnel)</span></h2>
        
        <p class="donation-description">
          Votre abonnement est une contribution essentielle à l’indépendance de L’Orient-le Jour.
          Si vous souhaitez vous engager plus encore à nos côtés et contribuer à la diffusion de
          notre journalisme, nous vous proposons de faire un don.
        </p>

        <div class="donation-input-container">
            <div class="donation-amount-wrapper">
                <input type="text" name="donation_amount" class="donation-amount-input" placeholder="Montant au choix">
                <span class="donation-currency-symbol">$</span>
            </div>
        </div>

        <div class="donation-radio-options">
            <label class="donation-radio-label">
                <input type="radio" name="donation_frequency" value="once" class="donation-radio-once">
                Une seule fois
            </label>

            <label class="donation-radio-label">
                <input type="radio" name="donation_frequency" value="recurring" class="donation-radio-recurring" checked>
                À chaque échéance de mon abonnement
            </label>
        </div>
    </div>

    <div class="payment-section-container">
        <h3 class="payment-title">3. Votre paiement</h3>

        <p class="payment-info-text">
            Si vous souhaitez payer dans une autre devise, choisissez votre pays de facturation en cliquant
            <a href="#" class="payment-currency-link">ici</a>.
        </p>

        <div class="payment-currency-dropdown-wrapper">
            <select name="currency" class="payment-currency-select">
                <option>USD $</option>
                <option>EUR €</option>
                <option>LBP ل.ل</option>
            </select>
        </div>

        <div class="payment-name-input-wrapper">
            <label class="payment-name-label">Nom sur la carte</label>
            <input type="text" name="card_name" class="payment-name-input">
        </div>

        <div class="payment-card-input-wrapper">
            <label class="payment-card-label">Numéro de carte bancaire</label>
            <input type="text" name="card_number" class="payment-card-input">
        </div>

        <div class="payment-details-row">
            <div class="payment-expiration-inputs">
                <label class="payment-exp-label">Date d’expiration</label>
                <div class="payment-exp-group">
                    <input type="text" placeholder="MM" name="exp_month" class="payment-exp-month">
                    <input type="text" placeholder="AA" name="exp_year" class="payment-exp-year">
                </div>
            </div>

            <div class="payment-cvc-input-wrapper">
                <label class="payment-cvc-label">Code de vérification</label>
                <input type="text" name="cvc" class="payment-cvc-input">
            </div>
        </div>

        <div class="payment-summary-row">
            <div class="payment-total">
                <p class="payment-total-label">Total:</p>
                <p class="payment-total-value">99$</p>
            </div>

            <div class="payment-next">
                <p class="payment-next-label">Prochain prélèvement</p>
                <p class="payment-next-value">215$</p>
                <p class="payment-next-date">Date du prochain prélèvement<br>28 juillet 2026</p>
            </div>
        </div>
    </div>

    <div class="payment-confirmation-container">
        <div class="payment-checkbox-wrapper">
            <input type="checkbox" id="payment-checkbox" name="agree_terms" class="payment-checkbox" required>
            <label for="payment-checkbox" class="payment-checkbox-label">
                Vous acceptez de recevoir nos newsletters et nos offres. Vous pouvez vous désinscrire à tout moment.
                En validant cet achat, vous acceptez les
                <a href="#" class="payment-terms-link">conditions générales</a>
                d'utilisation et notre
                <a href="#" class="payment-privacy-link">politique de confidentialité</a>.
            </label>
        </div>

        <div class="payment-final-button-wrapper">
            <button type="submit" class="payment-final-submit-button">Je valide</button>
        </div>
    </div>
</form>
@endsection
