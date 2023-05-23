

<header class="bg-light text-uppercase py-3">
    <div class="container bg-light d-flex justify-content-between align-items-center">
        <div>
            <img src="../assets/images/dc-logo.png" alt="Logo">
        </div>
        <ul class="d-flex m-0">
            <li v-for="(product, index) in products" class="ms-4">{{ product.text }}<a :href="product.url"></a></li>
        </ul>
    </div>
    <div class="jumbo overflow-hidden">
        <img class="img-fluid" src="../assets/images/jumbotron.jpg" alt="Jumbotron">
    </div>
</header>

