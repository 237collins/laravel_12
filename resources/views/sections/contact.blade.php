
@section('content2')
<!-- Ton du formulaire -->
<section id="contact">
  <div class="contact-container">
    <div class="contact-header">
      <h2><span>Get in</span> Touch</h2>
      <p>
        Have a project in mind? Let's work together to bring your ideas to life.
      </p>
    </div>

    @if(session('success'))
      <div style="color: green;">{{ session('success') }}</div>
    @endif

    <form class="contact-form" method="POST" action="{{ route('contact.send') }}">
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

      <div class="form-group">
        <button type="submit" class="btn-submit">Send Message</button>
      </div>
    </form>
  </div>
</section>

@endsection