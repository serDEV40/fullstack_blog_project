<template>
    <footer class="section-sm pb-0 border-top border-default pt-3">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-4 mb-4">
                    <a href="#" class="mb-4 d-flex align-items-center btn text-light text-start">
                        <font-awesome-icon icon="fa-solid fa-cube" class="me-3" size="2x" />
                        serDEV40
                    </a>
                    <p class="text-light" style="text-align: justify;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, qui? Ad sint non, iusto voluptatem nesciunt maiores repellendus commodi minus nulla necessitatibus reprehenderit, maxime sit!
                    </p>
                </div>
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <h4 class="title mb-4 p-2">Quick Pages</h4>
                    <ul class="list-unstyled footer-list list-grup-flush">
                        <li class="text-light list-group-item p-2">About</li>
                        <li class="text-light list-group-item p-2">Contact</li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <h5 class="title mb-4 p-2">Social Links</h5>
                    <ul class="list-unstyled footer-list list-group-flush">
                        <li class="list-group-item p-2 text-light">
                            Linkedin
                        </li>
                        <li class="list-group-item p-2 text-light">
                            Github
                        </li>
                        <li class="list-group-item p-2 text-light">
                            Instagram
                        </li>
                        <li class="list-group-item p-2 text-light">
                            Youtube
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</template>

<script>
    import { library } from '@fortawesome/fontawesome-svg-core';
    import { faCube } from '@fortawesome/free-solid-svg-icons';

    library.add(faCube);
</script>