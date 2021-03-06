<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
	<title>LOGIN</title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.jpeg"/>

	
	<style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f1f1f1;
        }

        .form-signin {
            width: 100%;
            max-width: 370px;
            padding: 15px;
            margin: auto;
        }
    </style>
</head>

<body>
<div class="form-signin">
	<form action="<?= url_to('login') ?>" method="post">
    <div class="mb-4 text-center">
        <div class=" mb-3">
            <img width="310px" src="/assets/images/logo.png"/>
        </div>
        <h1 class="h4 mb-0 font-weight-light">Login</h1>
        <p class="small text-muted"><i>This Web/Program Just For Internal Use Of PT. Yudhistira</i></p>
    </div>
	<div class="card">
        <div class="card-body">
            <?php if (session('error') !== null) : ?>
                <div class="alert alert-danger" role="alert"><?= session('error') ?></div>
            <?php elseif (session('errors') !== null) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php if (is_array(session('errors'))) : ?>
                        <?php foreach (session('errors') as $error) : ?>
                            <?= $error ?>
                            <br>
                        <?php endforeach ?>
                    <?php else : ?>
                        <?= session('errors') ?>
                    <?php endif ?>
                </div>
            <?php endif ?>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon">
                        <div class="input-group-text">
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                    <input type="text" autocomplete="off" name="email" class="form-control" autofocus onfocus="this.select()" placeholder="Username">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon">
                        <div class="input-group-text">
                            <i class="fa fa-lock"></i>
                        </div>
                    </div>
                    <input name="password" type="password" class="form-control" placeholder="Password">
                </div>
            </div>
            <button class="btn btn-primary btn-block" type="submit">Login</button>
            
        </div>
    </div>
	<p class="mt-3 mb-3 text-muted text-center">&copy; <?= date('Y') ?> Yudhistira </p>
	</form>
</div>
</body>

</html>