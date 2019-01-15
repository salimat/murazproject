<!doctype html>
<html>
<head>
    <meta charset="utf-8">

    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 15px;
        line-height: 20px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }

    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }

    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }

    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }

    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.top table td.title {
        font-size: 50px;
        line-height: 50px;
        color: #333;
    }

    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }

    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }

    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }

    .invoice-box table tr.item.last td {
        border-bottom: none;
    }

    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }

    @media only screen and (max-width: 500px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }

        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }

    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }

    .rtl table {
        text-align: right;
    }

    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>

  <script language="javascript" type="text/javascript">
    function printdiv(divID)
    {
      var headstr = "<body>";
      var footstr = "</body>";
    var newstr = document.all.item(divID).innerHTML;
      var oldstr = document.body.innerHTML;
      document.body.innerHTML = headstr+newstr+footstr;
      window.print();
      document.body.innerHTML = oldstr;
      return false;
    }
</script>
</head>

<body>
  <input name="b_print" type="button" onclick="printdiv('divID');" value=" Imprimer " />
  <p><a href="{{ url('/acceuilSecretariat/create ') }}">Retour</a></p>
  <div id="divID">

    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="/css/image1/logo.jpg" style="width:100%; max-width:300px;">
                            </td>
                            <?php
                              $timezone = "Europe/London";
                              date_default_timezone_set($timezone);
                              $today = date("Y-m-d");
                              $annees = substr($today,2,2);

                              $mois = substr($today,5,2);
                            ?>
                            <td>
                              <h3><strong>Facture</strong></h3>
                                <h4>Réf. : <?php echo 'FA'.$annees.$mois;?>-00050</h4>
                                <?php
                                  $timezone = "Europe/London";
                                  date_default_timezone_set($timezone);
                                  $today = date("Y-m-d");
                                ?>
                                  <p>Date facturation : <?php echo $today; ?> </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                Avenue Mamadou KONATE,Porte 2006<br>
                              -Lot 2013-01 BP 390 Bobo-Dioulasso 01<br>
                                N IFU 00010695 A
                            </td>

                            <td>
                                {{ $patients->nom_per.' '.$patients->prenom_per }}<br>
                                  {{ $patients->email_per}}<br>
                                  {{ $patients->contact_per}}

                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="heading">
                <td>
                    Methode de payement
                </td>

                <td>
                    Liquide
                </td>
            </tr>

            <tr class="details">
                <td>
                    Bon d'Assurance
                </td>

                <td>
                    Non
                </td>
            </tr>

            <tr class="heading">
                <td>
                    Prestation
                </td>

                <td>
                    Prix
                </td>
            </tr>
@foreach($examens as $emp)
            <tr class="item">
                <td>
                    {{$emp->nom_examen}}
                </td>

                <td>
                    {{$emp->montant_examen}}
                </td>
            </tr>
@endforeach


            <tr class="total">
                <td></td>

                <td>
                   Total: {{$total}}
                </td>
            </tr>
        </table>
        <br>
        <br>
        <div>
                {{ Auth::user()->name.' '.Auth::user()->prenom_per}}
                <br>
                <br>
        </div>
    </div>


        </div>
</body>
</html>
