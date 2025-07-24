<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/css/adminlte.min.css') }}">
    <script data-cfasync="false" nonce="0991651c-c8eb-46e8-9f8a-f238b11b854d">
        < link rel = "stylesheet"
        href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" >

            try {
                (function(w, d) {
                    ! function(fv, fw, fx, fy) {
                        if (fv.zaraz) console.error("zaraz is loaded twice");
                        else {
                            fv[fx] = fv[fx] || {};
                            fv[fx].executed = [];
                            fv.zaraz = {
                                deferred: [],
                                listeners: []
                            };
                            fv.zaraz._v = "5858";
                            fv.zaraz._n = "0991651c-c8eb-46e8-9f8a-f238b11b854d";
                            fv.zaraz.q = [];
                            fv.zaraz._f = function(fz) {
                                return async function() {
                                    var fA = Array.prototype.slice.call(arguments);
                                    fv.zaraz.q.push({
                                        m: fz,
                                        a: fA
                                    })
                                }
                            };
                            for (const fB of ["track", "set", "debug"]) fv.zaraz[fB] = fv.zaraz._f(fB);
                            fv.zaraz.init = () => {
                                var fC = fw.getElementsByTagName(fy)[0],
                                    fD = fw.createElement(fy),
                                    fE = fw.getElementsByTagName("title")[0];
                                fE && (fv[fx].t = fw.getElementsByTagName("title")[0].text);
                                fv[fx].x = Math.random();
                                fv[fx].w = fv.screen.width;
                                fv[fx].h = fv.screen.height;
                                fv[fx].j = fv.innerHeight;
                                fv[fx].e = fv.innerWidth;
                                fv[fx].l = fv.location.href;
                                fv[fx].r = fw.referrer;
                                fv[fx].k = fv.screen.colorDepth;
                                fv[fx].n = fw.characterSet;
                                fv[fx].o = (new Date).getTimezoneOffset();
                                if (fv.dataLayer)
                                    for (const fF of Object.entries(Object.entries(dataLayer).reduce(((fG, fH) => ({
                                            ...fG[1],
                                            ...fH[1]
                                        })), {}))) zaraz.set(fF[0], fF[1], {
                                        scope: "page"
                                    });
                                fv[fx].q = [];
                                for (; fv.zaraz.q.length;) {
                                    const fI = fv.zaraz.q.shift();
                                    fv[fx].q.push(fI)
                                }
                                fD.defer = !0;
                                for (const fJ of [localStorage, sessionStorage]) Object.keys(fJ || {}).filter((fL =>
                                    fL
                                    .startsWith("_zaraz_"))).forEach((fK => {
                                    try {
                                        fv[fx]["z_" + fK.slice(7)] = JSON.parse(fJ.getItem(fK))
                                    } catch {
                                        fv[fx]["z_" + fK.slice(7)] = fJ.getItem(fK)
                                    }
                                }));
                                fD.referrerPolicy = "origin";
                                fD.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(fv[
                                    fx])));
                                fC.parentNode.insertBefore(fD, fC)
                            };
                            ["complete", "interactive"].includes(fw.readyState) ? zaraz.init() : fv.addEventListener(
                                "DOMContentLoaded", zaraz.init)
                        }
                    }(w, d, "zarazData", "script");
                    window.zaraz._p = async eC => new Promise((eD => {
                        if (eC) {
                            eC.e && eC.e.forEach((eE => {
                                try {
                                    const eF = d.querySelector("script[nonce]"),
                                        eG = eF?.nonce || eF?.getAttribute("nonce"),
                                        eH = d.createElement("script");
                                    eG && (eH.nonce = eG);
                                    eH.innerHTML = eE;
                                    eH.onload = () => {
                                        d.head.removeChild(eH)
                                    };
                                    d.head.appendChild(eH)
                                } catch (eI) {
                                    console.error(`Error executing script: ${eE}\n`, eI)
                                }
                            }));
                            Promise.allSettled((eC.f || []).map((eJ => fetch(eJ[0], eJ[1]))))
                        }
                        eD()
                    }));
                    zaraz._p({
                        "e": ["(function(w,d){})(window,document)"]
                    });
                })(window, document)
            } catch (e) {
                throw fetch("/cdn-cgi/zaraz/t"), e;
            };
    </script>
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="{{ asset('/') }}">CAIIB</a>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="{{ url('login') }}" method="POST" autocomplete="off">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" autofocus autocomplete="off" placeholder="Email"
                            name="email" value="" />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" autofocus autocomplete="off" placeholder="Password"
                            name="password" value="" />
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <div class="social-auth-links text-center mb-3">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                </form>
                <p class="mb-1">
                    <a href="forgot-password.html">I forgot my password</a>
                </p>

            </div>

        </div>
    </div>


    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>


    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>


    <script src="{{ asset('assets/js/adminlte.min.js') }}"></script>

    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"957c893db9b88796","serverTiming":{"name":{"cfExtPri":true,"cfEdge":true,"cfOrigin":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"version":"2025.6.2","token":"2437d112162f4ec4b63c3ca0eb38fb20"}'
        crossorigin="anonymous"></script>
</body>

</html>
