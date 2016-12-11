"scripts": {
        "post-install-cmd": [
            "php htdocs/artisan clear-compiled",
            "php htdocs/artisan optimize",
            "php htdocs/artisan migrate --force"
        ],
        "post-update-cmd": [
            "php htdocs/artisan clear-compiled",
            "php htdocs/artisan optimize"
        ],
        "post-create-project-cmd": [
            "php htdocs/artisan key:generate"
        ]
    },