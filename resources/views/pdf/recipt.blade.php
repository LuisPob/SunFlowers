<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recibo de compra</title>
</head>

<body>
    <!--HEADER-->
    <table class="div-1Header">
        <tr>
            <td class="logotd">
                <img class="logotd" src="{{ public_path('storage/'.$company->logo) }}">
            </td>
            <td class="datos-grales-td">
                <table class="table_h_factura">
                    <thead>
                        <th class="headerDatosh titulos">Remision: <span class="titulos">{{$compra['id']}}</span></th>
                    </thead>
                    <tr>
                        <td class="titulos">
                            <p class="titulos">{{ $company->company_name }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>TELEFONO: <span>{{ $company->phone }}</span> </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>E-MAIL: <span>{{ $company->email }}</span> </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!--DATOS-->
    <table class="div-1Datos">
        <tr>
            <td class="receptor">
                <table class="table_receptor">
                    <tr>
                        <td class="titulos">
                            <p class="titulos tituloRec">receptor</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>NOMBRE: </p>
                        </td>
                        <td>
                            <p>{{ $user['firstname'] }} {{ $user['lastname'] }} </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>TELÉFONO: </p>
                        </td>
                        <td>
                            <p>{{ $user['phone'] }} </p>
                        </td>
                    </tr>
                </table>
            </td>
            <td class="datosGral">
                <table class="table_datos">
                    <tr>
                        <td>
                            <p>
                                FECHA DE COMPRA:
                            </p>
                        </td>
                        <td>
                            <p>
                               {{ $compra['created_at'] }}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                SUCURSAL:
                            </p>
                        </td>
                        <td>
                            <p>
                               Venta online
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!--MATERIAL/PRODUCTO-->
    <table class="table_materiales">
        <thead>
            <tr>
                <td>Código</td>
                <td>Cantidad</td>
                <td>Unidad</td>
                <td>Precio unitario</td>
                <td>Importe</td>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
            <tr>
                <td>{{ $producto['id_producto'] }}</td>
                <td>{{ $producto['cantidad'] }}</td>
                <td>{{ $producto['nombre_producto'] }}</td>
                <td>{{ $producto['precio'] }}</td>
                <td>{{ $producto['total_producto'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
     <!--DATOS FINALES-->
     <table class="div-1Datos">
        <tr>
            <td class="">
                <table class="table_datosFtxt">
                    <tr>
                        <td>
                            <p> A continuación se muestra un resumen del valor total del pedido. Los recibos son generados solo para compras aprobadas, en caso de algun problema con el pago, el recibo no es generado.</p>
                        </td>
                    </tr>
                </table>
            </td>
            <td class="datosFinales">
                <table class="table_datosfinales">
                    <tr>
                        <td>
                            <p>
                                Subtotal:
                            </p>
                        </td>
                        <td>
                            <p>
                               {{$compra['total']}}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                Descuento:
                            </p>
                        </td>
                        <td>
                            <p>
                               $0.00
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                IVA:
                            </p>
                        </td>
                        <td>
                            <p>
                               {{number_format($compra['total'] - ($compra['total'] / 1.19), 0)}}
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>
                                Total:
                            </p>
                        </td>
                        <td>
                            <p>
                               {{$compra['total']}}
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <!--FIRMA-->
    <div class="firma">
        Firma del cliente
    </div>
    <!--FOOTER-->
    <footer>
        <p> Visitanos: https://sunflowerstore.azurewebsites.net/ | {{ $company->company_name }} </p>
    </footer>
</body>

</html>
<style>
    /*ESTILOS GRALES*/
    * {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 12px;
    }

    .titulos {
        font-size: 15px;
        text-transform: uppercase;
    }

    /*HEADER*/
    .div-1Header, .div-1Datos {
        width: 100%;
    }

    .logotd {
        width: 50%;
        height: auto;
    }

    .datos-grales-td, .receptor{
        width: 50%;
    }

    .table_h_factura{
        width: 50%;
        height: 150px;
        background-color: #FFF;
        width: 100%;
        margin: 0px;
        padding: 0px;
    }
    .headerDatosh {
        text-align: right;
        color: #FFF;
        padding: 5px;
        background-color: rgba(253,211,103,255);
    }

    .table_h_factura tr td p {
        margin: 0px;
        padding: 2px;
        text-align: right;
        padding-right: 5px;
    }
    /*DATOS*/
    .table_receptor, .table_datos {
        width: 42%;
        height: 100px;
        background-color: rgba(243, 243, 243, 0.521);
        width: 100%;
        margin: 0px;
        padding: 10px;
        border-radius: 5px;
    }
    .table_receptor tr td p{
        margin: 0px;
        padding: 2px;
        text-align: left;
    }
    .tituloRec{
        color: rgb(130,76,59);
    }
    .table_datos tr td p{
        margin: 0px;
        padding: 2px;
        text-align: left;
    }
    /*MATERIALES*/
    .table_materiales{
        width: 100%;
        margin-top: 10px;
        margin-bottom: 10px;
    }
    .table_materiales thead tr{
        background-color:rgba(253,211,103,255);
        color: #FFF;
    }
    .table_materiales thead tr td{
        padding: 5px;
        text-align: center;
        font-size: 14px;
    }
    .table_materiales tr td{
        text-align: center;
        padding: 5px;
        border-bottom: 1px solid rgba(20, 20, 20, 0.096);
    }
    /*DATOS FINALES*/
    .table_datosFtxt{
        width: 70%;
        height: 100px;
        width: 100%;
        margin: 0px;
    }
    .datosFinales{
        width: 30%;
    }
    .datosFinales .table_datosfinales{
        width: 42%;
        height: 100px;
        width: 100%;
        margin: 0px;
        padding: 10px;
        border: 1px solid rgba(20, 20, 20, 0.096);
    }
    .datosFinales .table_datosfinales tr td p{
        margin: 0px;
        padding: 2px;
        text-align: left;
    }
    /*FIRMA*/
    .firma{
        border-top: 1px solid rgba(20, 20, 20, 0.5);
        text-align: center;
        width: 30%;
        margin-left: 70%;
        margin-top: 80px;
        padding-top:5px;
    }
    /*FOOTER*/
    footer{
        width: 100%;
        text-align: center;
        position: absolute;
        bottom: 0px;
    }
</style>