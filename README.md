<h1 align="center">
    <a href="https://api-platform.com">
        <img width="400" height="400" src="https://api-platform.com/images/zeus.svg" alt="API Platform">
        <br />API Platform - Laravel Demo
    </a>
</h1>

This application is a demonstration for the [API Platform Framework](https://api-platform.com/) using Laravel.

> [!NOTE]
> If you use API Platform with Symfony, check out the [API Platform Symfony Demo](https://github.com/api-platform/demo).

[//]: # (TODO: Try it online at <https://demo.api-platform.com>.)

[//]: # (TODO: add CI badges)

## Install

```console
git clone https://github.com/api-platform/laravel-demo.git
cd laravel-demo
php artisan api-platform:install
php artisan serve
```

> [!TIP]
> [Read the official "Getting Started" Guide for Laravel](https://api-platform.com/docs/laravel/).

Your API is up and running! 🎉

- Visit [http://127.0.0.1:8000/api/](http://127.0.0.1:8000/api/) to explore the fully active and documented API.
- Check out the demo application at [http://127.0.0.1:8000/](http://127.0.0.1:8000/).

[//]: # (TODO: ## What Can I Find In This Demo?)

[//]: # ()
[//]: # (This demo application contains several things you may be interested:)

[//]: # ()
[//]: # (| Feature                                                                                                                                                                                               | Usage                                                                                                                                                                                 |)

[//]: # (|-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|)

[//]: # (| [Bringing your Own Model]&#40;https://api-platform.com/docs/distribution/#bringing-your-own-model&#41;                                                                                                        | [Search usage]&#40;https://github.com/search?q=repo%3Aapi-platform%2Fdemo+path%3Aapi%2Fsrc+%22%23%5BApiResource%22&type=code&#41;                                                             |)

[//]: # (| [Model Scaffolding]&#40;https://api-platform.com/docs/schema-generator/getting-started/#model-scaffolding&#41;                                                                                                | [Search usage]&#40;https://github.com/search?q=repo%3Aapi-platform%2Fdemo+path%3Aapi%2Fsrc+%22%23%5BApiProperty%28types%3A%22&type=code&#41;                                                  |)

[//]: # (| [Plugging the Persistence System]&#40;https://api-platform.com/docs/distribution/#plugging-the-persistence-system&#41;                                                                                        | [Search usage]&#40;https://github.com/search?q=repo%3Aapi-platform%2Fdemo+path%3Aapi%2Fsrc+%22%23%5BORM%22&type=code&#41;                                                                     |)

[//]: # (| [Exposing Enums with API Platform]&#40;https://les-tilleuls.coop/blog/exposez-vos-enums-avec-api-platform&#41;                                                                                                | [Search usage]&#40;api/src/Enum&#41;                                                                                                                                                          |)

[//]: # (| [Validating Data]&#40;https://api-platform.com/docs/distribution/#validating-data&#41;                                                                                                                        | [Search usage]&#40;https://github.com/search?q=repo%3Aapi-platform%2Fdemo+path%3Aapi%2Fsrc+%22%23%5BAssert%22&type=code&#41;                                                                  |)

[//]: # (| [Configuring Operations]&#40;https://api-platform.com/docs/core/operations/&#41;                                                                                                                              | [Search usage]&#40;https://github.com/search?q=repo%3Aapi-platform%2Fdemo+path%3Aapi%2Fsrc+%22operations%3A%22&type=code&#41;                                                                 |)

[//]: # (| [Defining Which Operation to Use to Generate the IRI]&#40;https://api-platform.com/docs/core/operations/#defining-which-operation-to-use-to-generate-the-iri&#41;                                             | [Search usage]&#40;https://github.com/search?q=repo%3Aapi-platform%2Fdemo+path%3Aapi%2Fsrc+%22itemUriTemplate%3A%22&type=code&#41;                                                            |)

[//]: # (| [Subresources]&#40;https://api-platform.com/docs/core/subresources/&#41;                                                                                                                                      | [Search usage]&#40;https://github.com/search?q=repo%3Aapi-platform%2Fdemo+path%3Aapi%2Fsrc%2FEntity+%22uriTemplate%3A+%27%2Fbooks%2F%7BbookId%7D%2Freviews%7B._format%7D%27%22&type=code&#41; |)

[//]: # (| [Doctrine ORM Filters]&#40;https://api-platform.com/docs/core/filters/&#41;                                                                                                                                   | [Search usage]&#40;https://github.com/search?q=repo%3Aapi-platform%2Fdemo+path%3Aapi%2Fsrc+%22%23%5BApiFilter%22&type=code&#41;                                                               |)

[//]: # (| [Creating Custom Doctrine ORM Filters]&#40;https://api-platform.com/docs/core/filters/#creating-custom-doctrine-orm-filters&#41;                                                                              | [Search usage]&#40;https://github.com/search?q=repo%3Aapi-platform%2Fdemo+path%3Aapi+%22NameFilter%22+OR+%22app.filter.user.admin.name%22&type=code&#41;                                      |)

[//]: # (| [Overriding Default Order]&#40;https://api-platform.com/docs/core/default-order/&#41;                                                                                                                         | [Search usage]&#40;https://github.com/search?q=repo%3Aapi-platform%2Fdemo+path%3Aapi%2Fsrc+%22order%3A%22&type=code&#41;                                                                      |)

[//]: # (| [Changing the Number of Items per Page Client-side For a Specific Resource]&#40;https://api-platform.com/docs/core/pagination/#changing-the-number-of-items-per-page-client-side-for-a-specific-resource&#41; | [Search usage]&#40;https://github.com/search?q=repo%3Aapi-platform%2Fdemo+path%3Aapi%2Fsrc+%22paginationClientItemsPerPage%22&type=code&#41;                                                  |)

[//]: # (| [Advanced serialization]&#40;https://api-platform.com/docs/core/serialization/&#41;                                                                                                                           | [Search usage]&#40;https://github.com/search?q=repo%3Aapi-platform%2Fdemo+path%3Aapi%2Fsrc+%22%23%5BGroups%22&type=code&#41;                                                                  |)

[//]: # (| [User Support]&#40;https://api-platform.com/docs/core/user/&#41;                                                                                                                                              | [Search usage]&#40;api/src/Entity/User.php&#41;                                                                                                                                               |)

[//]: # (| [Custom Doctrine ORM Extension]&#40;https://api-platform.com/docs/core/extensions/&#41;                                                                                                                       | [Search usage]&#40;api/src/Doctrine/Orm/Extension&#41;                                                                                                                                        |)

[//]: # (| [Custom State Processor]&#40;https://api-platform.com/docs/core/state-processors/&#41;                                                                                                                        | [Search usage]&#40;api/src/State/Processor&#41;                                                                                                                                               |)

[//]: # (| [Creating Async APIs using the Mercure Protocol]&#40;https://api-platform.com/docs/core/mercure/&#41;                                                                                                         | [Search usage]&#40;https://github.com/search?q=repo%3Aapi-platform%2Fdemo+path%3Aapi%2Fsrc%2FEntity+%22mercure%3A%22&type=code&#41;                                                           |)

[//]: # (| [Advanced Authentication and Authorization Rules]&#40;https://api-platform.com/docs/core/security/&#41;                                                                                                       | [Search usage]&#40;https://github.com/search?q=repo%3Aapi-platform%2Fdemo+path%3Aapi%2Fsrc%2FEntity+%22security%3A%22+OR+%22securityPostDenormalize%3A%22&type=code&#41;                      |)

[//]: # (| [API Testing]&#40;https://api-platform.com/docs/core/testing/&#41;                                                                                                                                            | [Search usage]&#40;api/tests&#41;                                                                                                                                                             |)

[//]: # (| [The Admin]&#40;https://api-platform.com/docs/distribution/#the-admin&#41;                                                                                                                                    | [Search usage]&#40;pwa/pages/admin&#41;                                                                                                                                                       |)

[//]: # (| [A Next.js Web App]&#40;https://api-platform.com/docs/distribution/#a-nextjs-web-app&#41;                                                                                                                     | [Search usage]&#40;pwa&#41;                                                                                                                                                                   |)

[//]: # (| [Deploying to a Kubernetes Cluster]&#40;https://api-platform.com/docs/deployment/kubernetes&#41;                                                                                                              | [Search usage]&#40;helm/api-platform&#41;                                                                                                                                                     |)

[//]: # (TODO:## Contributing)

[//]: # ()
[//]: # ([Read the contributing guide]&#40;.github/CONTRIBUTING.md&#41;)

[//]: # (TODO: ## Credits)

[//]: # ()
[//]: # (Created by [Kévin Dunglas]&#40;https://dunglas.fr/&#41;. Commercial support available)

[//]: # (at [Les-Tilleuls.coop]&#40;https://les-tilleuls.coop/&#41;.)

