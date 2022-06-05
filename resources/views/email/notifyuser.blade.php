<!-- BEGIN HEADER -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" >
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">
    <link href="{{ asset('mailcss/style.css') }}" rel="stylesheet">
    <style type="text/css">
        [EmailCSS]
        @media only screen {
            html {
                min-height: 100%;
                background: #fff
            }
            a:visited {
                text-decoration: none;
            }
            .footer-description a, .x_footer-description a {
                color: #0057FF !important;
                text-decoration: none !important;
            }
            a {text-decoration: none;}
            a:visited {color:#7C8088; text-decoration:none;}

            a {
                text-decoration: none;
            }
            a:visited {
                color: #7C8088;
                text-decoration: none;
            }
        }
        @media only screen and (max-width: 800px) {
            .small-float-center {
                margin: 0 auto !important;
                float: none !important;
                text-align: center !important
            }
            .container-radius {
                border-spacing: 20px 0 !important;
                padding-top: 20px !important;
            }
            .mobile-hide{
                display: none !important;
            }
            .table-order-description{
                padding-left: 8px !important;
            }
        }
        @media only screen and (max-width: 800px) {
            table.img {
                height: auto !important;
            }
            table.body img {
                width: auto;
                height: auto
            }
            table.row {
                padding: 30px !important;
            }
            table.body center {
                min-width: 0 !important;
            }
            table.body .container {
                width: 95% !important
            }
            table.body .columns {
                height: auto !important;
                -moz-box-sizing: border-box;
                -webkit-box-sizing: border-box;
                box-sizing: border-box;
            }
            table.body .columns .columns {
                padding-left: 0 !important;
                padding-right: 0 !important
            }
            table.body .collapse .columns {
                padding-left: 0 !important;
                padding-right: 0 !important
            }
            table.small-6 {
                display: inline-block !important;
                width: 50% !important
            }
            table.small-12 {
                display: inline-block !important;
                width: 100% !important
            }
            th.small-6 {
                display: inline-block !important;
                width: 50% !important
            }
            th.small-12 {
                display: inline-block !important;
                width: 100% !important
            }
            .columns th.small-12 {
                margin-bottom: 8px;
                display: block !important;
                width: 100% !important
            }
            table.menu {
                width: 100% !important
            }
            table.menu td, table.menu th {
                width: auto !important;
                display: inline-block !important
            }
            table.menu.vertical td, table.menu.vertical th {
                display: block !important
            }
            table.menu[align=center] {
                width: auto !important
            }
            .header-logo {
                margin: 0 auto;
            }
            .header-top-text {
                margin-right: auto;
                text-align: center !important;
            }
            th.menu-item{
                width: 50px !important;
                min-width: 50px;
                float: left !important;
            }
            th.menu-item .rounded-button{
                float: left !important;
            }
        }
    </style>
</head>
@php
    $site = App\Models\Backend\SiteSettings::find(1);
    $currency = App\Models\Currency::where('status',1)->first();
@endphp
<body style="background: url(http://inebur.com/antler/email/img/promo-w.png) repeat center center fixed; background-color:#ee5586;-moz-box-sizing:border-box;-ms-text-size-adjust:100%;-webkit-box-sizing:border-box;-webkit-text-size-adjust:100%;Margin:0;box-sizing:border-box;color:#0a0a0a;font-family:Open Sans,sans-serif;font-size:16px;font-weight:400;line-height:1.3;margin:0;min-width:100%;padding:0;text-align:left;width:100%!important">
<span class="preheader"
      style="color:#fff;display:none!important;font-size:1px;line-height:1px;max-height:0;max-width:0;mso-hide:all!important;opacity:0;overflow:hidden;visibility:hidden"></span>

<table class="body"
       style="Margin:0;border-collapse:collapse;border-color:transparent;border-spacing:0;color:#0a0a0a;font-family:Open Sans,sans-serif;font-size:16px;font-weight:400;height:100%;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;width:100%">
    <tr style="padding:0;text-align:left;vertical-align:top">
        <td class="center" align="center" valign="top"
            style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Open Sans,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
            <center data-parsed="" style="min-width:800px;width:100%">
                <table class="spacer float-center"
                       style="Margin:0 auto;border-collapse:collapse;border-color:transparent;border-spacing:0;float:none;margin:0 auto;padding:0;text-align:center;vertical-align:top;width:100%">
                    <tbody>
                    <tr style="padding:0;text-align:left;vertical-align:top">
                        <td height="20"
                            style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Open Sans,sans-serif;font-size:40px;font-weight:400;hyphens:auto;line-height:40px;margin:0;mso-line-height-rule:exactly;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
                        </td>
                    </tr>
                    </tbody>
                </table>
                <table cellspacing="0" cellpadding="0" border="0" align="center" class="container container-radius body-drip float-center"
                        style="display:table;border-spacing:30px 0;border-collapse:separate;width:100%;max-width:800px; border-top-right-radius: 15px; border-top-left-radius: 15px; font-weight:300">
                    <tr>
                        <td width="100%">
                            <table border="0" cellpadding="0" cellspacing="0" align="right">
                                <tr>
                                    <td class="center" style="font-size: 14px; color: #ffffff; text-align:right; line-height: 20px; vertical-align: middle; padding:10px 0px 20px"> 
                                       
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <table cellspacing="0" cellpadding="0" border="0" align="center" class="container container-radius body-drip float-center"
                        style="display:table;border-spacing:60px 0;border-collapse:separate;width:100%;max-width:800px;background:#15212a; border-top-right-radius: 15px; border-top-left-radius: 15px;">
                    <tbody>
                        <td height="30px"
                            style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Open Sans,sans-serif;font-size:32px;font-weight:400;hyphens:auto;line-height:32px;margin:0;mso-line-height-rule:exactly;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
                        </td>
                        <tr>
                            <td>
                                <table class="spacer float-center"
                                    style="Margin:0 auto;border-collapse:collapse;border-color:transparent;border-spacing:0;float:none;margin:0 auto;padding:0;text-align:center;vertical-align:top;width:100%">
                                    <tbody>
                                        <tr style="padding:0;text-align:left;vertical-align:top">
                                            <td height="0"
                                                style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Open Sans,sans-serif;font-size:40px;font-weight:400;hyphens:auto;line-height:40px;margin:0;mso-line-height-rule:exactly;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table align="left" width="60%" cellpadding="0" cellspacing="0" border="0" class="deviceWidth small-12 paddi">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#" target="_blank">
                                                    <img  src="{{ asset($site->wlogo) }}" border="0"/>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table align="right" width="40%" cellpadding="0" cellspacing="0" border="0" class="deviceWidth small-12 paddi" style="padding-top: 15px;">
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                                <table class="spacer float-center"
                                    style="Margin:0 auto;border-collapse:collapse;border-color:transparent;border-spacing:0;float:none;margin:0 auto;padding:0;text-align:center;vertical-align:top;width:100%">
                                    <tbody>
                                        <tr style="padding:0;text-align:left;vertical-align:top">
                                            <td height="0"
                                                style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Open Sans,sans-serif;font-size:40px;font-weight:400;hyphens:auto;line-height:40px;margin:0;mso-line-height-rule:exactly;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <td height="30px"
                            style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Open Sans,sans-serif;font-size:32px;font-weight:400;hyphens:auto;line-height:32px;margin:0;mso-line-height-rule:exactly;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
                        </td>
                    </tbody>
                </table>


                <table cellspacing="0" cellpadding="0" border="0" align="center" class="container container-radius body-drip float-center" background="http://inebur.com/antler/email/img/banner.jpg"
                    style="display:table;border-spacing:60px 0;border-collapse:separate;width:100%;max-width:800px;background-color: #15212a;">
                    <tbody>
                        <tr>
                            <td style="font-size: 42px; color:#37474F;">
                                <table align="left" border="0" cellpadding="0" cellspacing="0" class="deviceWidth">
                                    <tbody>
                                        <tr style="padding:0;text-align:left;vertical-align:top">
                                            <td height="50px"
                                                style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Open Sans,sans-serif;font-size:32px;font-weight:400;hyphens:auto;line-height:32px;margin:0;mso-line-height-rule:exactly;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 52px; text-decoration:none; font-weight:400; color:#ffffff;">
                                                {{ $site->name }}
                                                </td>
                                            </tr>
                                            <tr><td height="10px"></td></tr>
                                           
                                            <tr><td height="40"></td></tr>
                                           
                                            <tr style="padding:0;text-align:left;vertical-align:top">
                                                <td height="60px"
                                                    style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Open Sans,sans-serif;font-size:32px;font-weight:400;hyphens:auto;line-height:32px;margin:0;mso-line-height-rule:exactly;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                <table cellspacing="0" cellpadding="0" border="0" align="center" class="container body-drip float-center"
                       style="Margin:0 auto;background:#f6f6f6;border-collapse:collapse;border-color:transparent;border-spacing:0;float:none;margin:0 auto;padding:0;text-align:center;vertical-align:top;width:800px;max-width:800px">
                    <tbody>

                    <tr style="padding:0;text-align:left;vertical-align:top">
                        <td style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Open Sans,sans-serif;font-size:16px;font-weight:400;hyphens:auto;line-height:1.3;margin:0;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">

                            <table class="spacer float-center"
                                   style="Margin:0 auto;background:#f6f6f6;border-collapse:collapse;border-color:transparent;border-spacing:0;float:none;margin:0 auto;padding:0;text-align:center;vertical-align:top;width:100%">
                                <tbody>
                                <tr style="padding:0;text-align:left;vertical-align:top">
                                    <td height="50px"
                                        style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Open Sans,sans-serif;font-size:32px;font-weight:400;hyphens:auto;line-height:32px;margin:0;mso-line-height-rule:exactly;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <table class="container-radius"
                                   style="border-top-width:0;border-top-color:#efefef;border-left-width:0;border-right-width:0;border-bottom-width:1px;border-bottom-color:#efefef;border-right-color:#efefef;border-left-color:#efefef;border-style:solid; border-bottom-left-radius:3px;border-bottom-right-radius:3px;display:table;padding-bottom:50px;border-spacing:60px 0;border-collapse:separate;width:100%;background:#f6f6f6;max-width:800px;">
                                <tbody>
                                <tr>
                                    <td>
                                        <table class="row"
                                               style="border-collapse:collapse;border-color:transparent;border-spacing:0;display:table;padding:0;position:relative;text-align:left;vertical-align:top;width:100%">
                                            <tbody>
                                            <tr style="padding:0;text-align:left;vertical-align:top"></tr>
                                            </tbody>
                                        </table>
                                        <!-- END HEADER -->

                                        <!-- BEGIN CONTENT PREVIEW -->
                                        Hello {{ $data['name'] }},<br><br>
                                        This is to inform you that your {{ $data['type'] }} was successful <br>
                                         and {{ $currency->code }}{{ number_format($data['amount'], 2) }} has been credited into your Bank Account. <br> <br>
                                        Please confirm. <br> <br>

                                        Type: {{ $data['type'] }} <br> <br>
                                        Amount: {{ $currency->code }}{{ number_format($data['amount'], 2) }} <br> <br>
                                        
                                        <!-- END CONTENT PREVIEW -->

                                        <!-- BEGIN FOOTER -->
                                        </td>
</tr>
</tbody>
</table>

</td>
</tr>
</tbody>
</table>
<hr align="center" class="float-center spacer container"
    style="background:#efefef;border:none;color:#efefef;height:1px;margin-bottom:0;margin-top:0;width: 800px;">

<table cellspacing="0" cellpadding="0" border="0" align="center" class="container container-radius body-drip" style="display:table;border-spacing:60px 0;border-collapse:separate;width:100%;max-width:800px;background:#15212a;border-bottom-right-radius: 15px; border-bottom-left-radius: 15px;">
        <tbody>
            <tr>
                <td style="color:#37474F;">
                    <table class="spacer float-center"
                        style="Margin:0 auto;border-collapse:collapse;border-color:transparent;border-spacing:0;float:none;margin:0 auto;padding:0;text-align:center;vertical-align:top;width:100%">
                        <tbody>
                            <tr>
                                <td height="60px">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                  
                    <table align="left" width="65%" border="0" cellpadding="0" cellspacing="0" class="deviceWidth" style="line-height: 28px;">
                        <tbody>
<tr>
<td style="color:#808080;font-size:14px;">{{ $site->name }} <a href="{{ url('/') }}" target="_blank" style="text-decoration:none; color:#ee5586">♥ </a> |
<a href="#" style="text-decoration:none; color:#808080">Privacy Policy
</a> |
<a href="#" style="text-decoration:none; color:#808080">Unsubscribe
</a>
</td>
</tr>
                    </tbody>
                </table>
                <table class="spacer float-center"
                    style="Margin:0 auto;border-collapse:collapse;border-color:transparent;border-spacing:0;float:none;margin:0 auto;padding:0;text-align:center;vertical-align:top;width:100%">
                    <tbody>
                        <tr>
                            <td height="60px">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>


<table class="spacer float-center"
       style="Margin:0 auto;border-collapse:collapse;border-color:transparent;border-spacing:0;float:none;margin:0 auto;padding:0;text-align:center;vertical-align:top;width:100%">
    <tbody>
    <tr style="padding:0;text-align:left;vertical-align:top">
        <td height="50"
            style="-moz-hyphens:auto;-webkit-hyphens:auto;Margin:0;border-collapse:collapse!important;color:#0a0a0a;font-family:Open Sans,sans-serif;font-size:40px;font-weight:400;hyphens:auto;line-height:40px;margin:0;mso-line-height-rule:exactly;padding:0;text-align:left;vertical-align:top;word-wrap:break-word">
        </td>
    </tr>
    </tbody>
</table>
</center>
</td>
</tr>
</table>
</body>
</html>     
<!-- END FOOTER -->   