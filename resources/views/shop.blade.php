@extends('layouts.appStore' , ['company' => $company])

@section('content')
<div class="container" style="margin-top: 80px">
    <br>
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-7">
                    <h4 style="color: black;">Productos</h4>
                </div>
            </div>
            <hr>
            <div class="row">
                @foreach($products as $pro)
                <div class="col-lg-3 col-md-6">
                    <div class="card mb-4" style="height: auto;">
                        <div class="card-body">
                            <img src="{{ asset('storage/images/' . $pro->image_path) }}" class="img-fluid border-radius-lg mx-auto px-0 py-1" style="display: block;  object-fit: cover;" alt="{{ $pro->image_path }}">
                            <a href="">
                                <h6 class="card-title">{{ $pro->name }}</h6>
                            </a>
                            <p>${{ $pro->price }}</p>
                            <form action="{{ route('cart.store') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
                                <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
                                <input type="hidden" value="{{ $pro->image_path }}" id="img" name="img">
                                <input type="hidden" value="{{ $pro->slug }}" id="slug" name="slug">
                                <input type="hidden" value="1" id="quantity" name="quantity">
                                <div class="card-footer" style="background-color: white;">
                                    <div class="row justify-content-center">
                                        <button type="submit" class="btn btn-custom" title="Agregar al carrito">
                                            <i class="fa fa-shopping-cart"></i> Agregar al carrito
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Footer -->

    <footer class="pt-5 pb-3 blurred-background" style="background-color: rgba(255, 255, 255, 0.8);" id="footer">
   
    <div class="container-fluid " style="text-align: justify;">
        <div class="row text-md-left">

            <div class="col-lg-3 col-md-8">
                <h5>🌻SOBRE SUNFLOWER</h5>
                <small style="font-weight: 600;">📍 Talcahuano, Region del BioBio, Chile. En nuestro universo de bisutería, cada pieza es más que un simple accesorio; es una manifestación de arte y creatividad, diseñada para realzar tu belleza interior y exterior, recordándote que la elegancia y el estilo pueden ser parte de tu día a día.</small>
            </div>

            <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
    <h5>🦋CONTACTO</h5>
    <ul>
        <li class="footer-top__menu-item">
            <small><a href="https://wa.me/56956103084" target="_blank" style="font-weight: 600;">WhatsApp</a></small>
        </li>
        <li class="footer-top__menu-item">
            <small><a href="mailto:florencia.sanzana.ortega@gmail.com" target="_blank" style="font-weight: 600;">Correo Electrónico</a></small>
        </li>
    </ul>
</div>

            <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                <h5>🌻INFORMACIÓN</h5>
                <ul class="navbar-nav mr-auto" style="font-weight: 600;">
                    <li>
                        <small><a href="/tienda-online" id="tienda-online" title="TIENDA ONLINE" style="font-weight: 600;">Tienda Online</a></small>
                    </li>
                    <li>
                    <small ><a href="/clientas" id="team-sunflower" title="TEAM sunflower ♡" style="font-weight: 600;">Team Sunflower</a></small>
                    </li>
                    <li>
                    <small> <a href="/informacion-envios" id="plazos-despachos" title="Plazos Despachos"style="font-weight: 600;">Plazos Despachos</a></small>
                    </li>
                    <li>
                    <small> <a href="/condiciones-entrega-despacho" id="condiciones-despachos" title="Condiciones Despachos"style="font-weight: 600;">Condiciones Despachos</a></small>
                    </li>
                    <li>
                    <small> <a href="/politicas-de-cambios" id="politicas-cambios" title="Políticas de Cambios y Devoluciones"style="font-weight: 600;">Políticas de Cambios y Devoluciones</a></small>
                    </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
                <h5> 🦋¿ERES TEAM SUNFLOWER? ¡REGISTRATE!</h5>
                <small style="font-weight: 600;">¡Registrate para que estemos en contacto y podamos compartir la mejor información, tips, sorpresas, descuentos, lanzamientos y más!</small>
                <ul class="list-inline social-footer my-3">
                    <li class="list-inline-item"> <small style="font-weight: 600;">🌻SÍGUENOS:</li></small>
                    <li class="list-inline-item">
                        <a href="https://www.instagram.com/sunflower._ccp" title="Ir a Instagram" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li class="list-inline-item d-md-none">
                        <a href="https://api.whatsapp.com/send?phone=56973069652&text=Hola SUNFLOWER" title="WhatsApp" target="_blank">
                            <i class="fab fa-whatsapp fa-fw"></i>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    </div>

</footer>

</div>
<style>
       footer.container-fluid {
        padding-left: 0;
        padding-right: 0;
    }
     .blurred-background {
        background-color: rgba(255, 255, 255, 0.5);
        backdrop-filter: blur(5px);
        width: 100%;
        margin-left: auto;
        margin-right: auto;
        padding-left: 15px;
        padding-right: 15px;
    }
    body {
        background: url("/img/fondowelcome.jpg");
        background-repeat: no-repeat; /* Evita la repetición de la imagen */
        background-size: cover; /* Ajusta la imagen de fondo para cubrir todo el contenedor */
        background-position: left center, right center; /* Posiciona los girasoles a la izquierda y a la derecha */
        background-attachment: fixed;
        backdrop-filter: blur(5px);
    }

    .btn-custom {
        background-color: #a5eea0;
        color: black; /* Cambia el color del texto a negro */
    }
</style>






@endsection