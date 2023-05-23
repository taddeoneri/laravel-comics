<footer>
    <div class="footer-top overflow-hidden">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="d-flex">
                <ul class="text-light p-0" v-for="(list, index) in lists">
                    <li><h4 class="my-3">{{ list.title }}</h4></li>
                    <li class="text-capitalize" v-for="(link, index) in list.items"><a :href="link.url">{{ link.text }}</a></li>
                </ul>
            </div>
            <div class="box-image">
                <img src="../assets/images/dc-logo-bg.png" alt="">
            </div>
        </div>
    </div>
    <div class="footer-bottom py-4">
        <div class="container d-flex justify-content-between align-items-center">
            <button>Sign-up now!</button>
            <div class="d-flex align-items-center">
                <p class="m-0 text-primary text-uppercase fw-bold mx-2">Follow us</p>
                <div class="d-flex">
                    <img class="ms-3" v-for="picture in pictures" :src="'/images/'+picture.name" alt="">
                </div>
            </div>
        </div>

    </div>
</footer>
