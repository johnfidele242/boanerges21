<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Vérification de l'adresse email</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-5">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="alert alert-info mb-4">
                    Merci pour votre inscription ! Avant de commencer, veuillez vérifier votre adresse email en cliquant sur le lien que nous venons de vous envoyer. Si vous n’avez pas reçu l’email, nous vous en renverrons un avec plaisir.
                </div>

                @if (session('status') === 'verification-link-sent')
                    <div class="alert alert-success">
                        Un nouveau lien de vérification a été envoyé à l’adresse email que vous avez fournie lors de votre inscription.
                    </div>
                @endif

                <div class="d-flex justify-content-between align-items-center mt-4">
                    <!-- Resend Verification Form -->
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary">
                            Renvoyer l'email de vérification
                        </button>
                    </form>

                    <!-- Logout Form -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-link text-danger text-decoration-underline">
                            Se déconnecter
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>

</body>
</html>
