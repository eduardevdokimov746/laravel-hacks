$request = new CreateUserRequest([
    'login' => 'root',
    'password' => '123',
]);

$request->setContainer(app())
    ->setRedirector(app(\Illuminate\Routing\Redirector::class))
    ->validateResolved();

// Вызываем метод контролера
$app->make(UserController::class)->callAction('store', [$request])
