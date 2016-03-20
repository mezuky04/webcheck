<!-- BEGIN Footer -->
<footer class="page-footer light-blue">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">{{ trans('layout.about_this_app') }}</h5>
                <p class="grey-text text-lighten-4">{{ trans('layout.about_this_app_long') }}</p>


            </div>
            <div class="col l3 s12">
                <h5 class="white-text">{{ trans('layout.company') }}</h5>
                <ul>
                    <li><a class="white-text" href="#!">{{ trans('layout.company_homepage') }}</a></li>
                    <li><a class="white-text" href="#!">{{ trans('layout.company_about_page') }}</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">{{ trans('layout.legal') }}</h5>
                <ul>
                    <li><a class="white-text" href="/legal/terms-of-service">{{ trans('layout.terms_of_service') }}</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            {{ trans('layout.created_by') }} <a class="white-text" target="_blank" href="#">Alex</a>
        </div>
    </div>
</footer>
<!-- END Footer -->