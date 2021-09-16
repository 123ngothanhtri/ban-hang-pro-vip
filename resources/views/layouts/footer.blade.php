<footer class="alert-secondary">
    <div class="container p-4">
        <div class="row">
            <div class="col-lg-6 col-md-12 ">
                <p>{{ $settingHome->footer1 }}</p>
            </div>
            <div class="col-lg-3 col-md-6 ">
                <ul>
                    <li>
                        <a class="text-dark" href="{{ url('/') }}">Trang chủ</a>
                    </li>
                    <li>
                        <a class="text-dark" href="{{ url('/admin-login') }}">Admin</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6">
                <ul class="list-unstyled">
                    <li><a>Email: banhang@gmail.com</a></li>
                    <li><a>Số điện thoại: 0123456789 </a></li>
                </ul>
                <h5><i class="fab fa-facebook-square"></i>
                    <i class="fab fa-facebook-messenger"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-tiktok"></i>
                    <i class="fab fa-youtube"></i>
                    <i class="fab fa-twitter"></i>
                </h5>
            </div>
        </div>
    </div>
    <div class="text-center bg-secondary p-2">
        <p>{{ $settingHome->footer2 }}</p>
    </div>
</footer>
