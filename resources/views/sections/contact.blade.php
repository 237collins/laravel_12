
@section('content2')
<section id="contact">
  <div class="contact-container">
    <div class="contact-header">
      <h2><span>Get in</span> Touch</h2>
      <p>
        Have a project in mind? Let's work together to bring your ideas to life.
      </p>
    </div>

    {{-- Message de succès --}}
    <div id="form-message" style="display: none; color: green; margin-bottom: 10px;"></div>

    <form id="contact-form" class="contact-form" method="POST" action="{{ route('contact.send') }}">
      @csrf
      <div class="form-group">
        <input type="text" id="name" name="name" class="form-control"
          placeholder="Enter your full name" required />
      </div>

      <div class="form-group">
        <input type="email" id="email" name="email" class="form-control"
          placeholder="Enter your email address" required />
      </div>

      <div class="form-group">
        <input type="text" id="subject" name="subject" class="form-control"
          placeholder="Enter your subject message" required />
      </div>

      <div class="form-group">
        <textarea id="message" name="message" class="form-control"
          placeholder="Enter your Message" required></textarea>
      </div>
      {{-- Ancien bouton Send Statique --}}
      {{-- <div class="form-group">
        <button type="submit" class="btn-submit">Send Message</button>
      </div> --}}
      
      {{-- Nouveau bouton Send avec Barre de chargement --}}
      {{-- <div class="form-group">
  <button type="submit" id="submit-btn" class="btn-submit">
    <span class="btn-text">Send Message</span>
    <span class="btn-loading" style="display: none;">Envoi en cours...</span>
  </button>
</div> --}}

{{-- Nouveau bouton 2.0 Send avec Barre de chargement --}}
<div class="form-group" >
  {{-- CSS pour le spinner --}}
  <style>
  .spinner {
    display: inline-block;
    width: 16px;
    height: 16px;
    border: 2px solid #fff;
    border-top: 2px solid #3498db;
    border-radius: 50%;
    animation: spin 0.6s linear infinite;
    margin-right: 6px;
    vertical-align: middle;
  }

  @keyframes spin {
    to { transform: rotate(360deg); }
  }

  #form-message {
    padding: 10px;
    border-radius: 4px;
    font-weight: bold;
  }

  #form-message.success {
    background-color: #d4edda;
    color: #155724;
  }

  #form-message.error {
    background-color: #f8d7da;
    color: #721c24;
  }
  #form-message {
  transition: opacity 0.5s ease-in-out;
  opacity: 1;
}

#form-message.fade-out {
  opacity: 0;
}

</style>

  <button type="submit" id="submit-btn" class="btn-submit">
    <span class="btn-text">Send Message</span>
    <span class="btn-loading" style="display: none;">
      <span class="spinner"></span> Envoi en cours...
    </span>
  </button>
</div>


  <div id="form-message" style="display:none; margin-bottom: 15px;"></div>

    </form>
  </div>
</section>

{{-- SCRIPT AJAX --}}
{{-- AJAX  2.0 --}}

<script>
  document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contact-form');
    const submitButton = form.querySelector('.btn-submit');

    form.addEventListener('submit', function (e) {
      e.preventDefault();

      const formData = new FormData(form);

      // Désactiver le bouton et montrer le spinner
      submitButton.disabled = true;
      const originalText = submitButton.innerHTML;
      submitButton.innerHTML = `<span class="spinner"></span> Envoi en cours...`;

      fetch(form.action, {
        method: 'POST',
        headers: {
          'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
        },
        body: formData
      })
      .then(response => {
        if (!response.ok) throw new Error("Erreur lors de l'envoi du formulaire.");
        return response.text();
      })
      .then(() => {
        // Restaurer le bouton
        submitButton.disabled = false;
        submitButton.innerHTML = originalText;

        // Message de succès
        const messageBox = document.createElement('div');
        messageBox.id = 'form-message';
        messageBox.textContent = 'Message envoyé avec succès !';
        messageBox.style.color = 'green';
        messageBox.style.margin = '10px 0';
        form.insertAdjacentElement('beforebegin', messageBox);

        // Réinitialiser le formulaire
        form.reset();

        // Disparition du message après 5 secondes
        setTimeout(() => {
          messageBox.classList.add('fade-out');
          setTimeout(() => messageBox.remove(), 500);
        }, 5000);
      })
      .catch(error => {
        submitButton.disabled = false;
        submitButton.innerHTML = originalText;
        alert(error.message);
      });
    });
  });
</script>



{{-- Ajax 1.0 --}}
{{-- <script>
  document.getElementById('contact-form').addEventListener('submit', function(e) {
    e.preventDefault();

    const form = e.target;
    const url = form.action;
    const formData = new FormData(form);
    const messageBox = document.getElementById('form-message');

    fetch(url, {
      method: 'POST',
      headers: {
        'X-CSRF-TOKEN': form.querySelector('[name=_token]').value,
        'Accept': 'application/json',
      },
      body: formData,
    })
    .then(response => {
      if (!response.ok) throw new Error('Erreur réseau');
      return response.json();
    })
    .then(data => {
      messageBox.innerText = data.message;
      messageBox.style.display = 'block';

      // Vider le formulaire
      form.reset();

      // Masquer le message après 5 secondes
      setTimeout(() => {
        messageBox.style.display = 'none';
      }, 5000);
    })
    .catch(error => {
      messageBox.innerText = "Une erreur s'est produite. Veuillez réessayer.";
      messageBox.style.color = 'red';
      messageBox.style.display = 'block';
    });
  });
</script> --}}
@endsection
