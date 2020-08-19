echo(
    hash('sha256', md5(
        base64_encode(
            base64_decode(
                bin2hex("")
                )
            )
        )
    )
);
