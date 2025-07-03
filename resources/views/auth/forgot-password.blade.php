<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Réinitialisation du mot de passe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-5">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <h2 class="mb-4 text-center">Réinitialiser le mot de passe</h2>

                <p class="mb-4 text-muted">
                    Mot de passe oublié ? Pas de problème. Indique simplement ton adresse email et nous t’enverrons un lien pour en définir un nouveau.
                </p>

                <!-- Session Status -->
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Adresse Email</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus class="form-control">
                        @error('email')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Submit -->
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">
                            Envoyer le lien de réinitialisation
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</body>
</html>
