<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="width: 100%;">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Aero</title>
    <style type="text/css">
        .ReadMsgBody {
            width: 100%;
            background-color: #ffffff;
        }

        .ExternalClass {
            width: 100%;
            background-color: #ffffff;
        }

        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {
            line-height: 100%;
        }

        html {
            width: 100%;
        }

        body {
            -webkit-text-size-adjust: none;
            -ms-text-size-adjust: none;
            margin: 0;
            padding: 0;
        }

        table {
            border-spacing: 0;
            border-collapse: collapse;
            table-layout: fixed;
            margin: 0 auto;
        }

        table table table {
            table-layout: auto;
        }

        img {
            display: block !important;
        }

        table td {
            border-collapse: collapse;
        }

        .yshortcuts a {
            border-bottom: none !important;
        }

        a {
            color: #21b6ae;
            text-decoration: none;
        }

        .textbutton a {
            font-family: 'open sans', arial, sans-serif !important;
            color: #ffffff !important;
        }

        .text-link a {
            color: #95a5a6 !important;
        }

        @media only screen and (max-width: 640px) {
            body {
                width: auto !important;
            }

            table[class="table600"] {
                width: 450px !important;
            }

            table[class="table-inner"] {
                width: 90% !important;
            }

            table[class="table3-3"] {
                width: 100% !important;
                text-align: center !important;
            }
        }

        @media only screen and (max-width: 479px) {
            body {
                width: auto !important;
            }

            table[class="table600"] {
                width: 290px !important;
            }

            table[class="table-inner"] {
                width: 82% !important;
            }

            table[class="table3-3"] {
                width: 100% !important;
                text-align: center !important;
            }
        }
    </style>

</head>

<body style="-webkit-text-size-adjust: none;-ms-text-size-adjust: none;margin: 0;padding: 0;">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#21b6ae"
       style="border-spacing: 0;border-collapse: collapse;table-layout: fixed;margin: 0 auto;">
    <tr>
        <td align="center" background="<?php echo Router::url('/', true);?>assets/img/email/bg.jpg"
            style="background-size: cover;background-position: top;border-collapse: collapse;">
            <table class="table600" width="530" border="0" align="center" cellpadding="0" cellspacing="0"
                   style="border-spacing: 0;border-collapse: collapse;table-layout: fixed;margin: 0 auto;">
                <tr>
                    <td height="50" style="border-collapse: collapse;"></td>
                </tr>

                <!-- logo -->
              <!--  <tr>
                    <td align="center" style="line-height: 0px;border-collapse: collapse;">
                        <img style="display:block; line-height:0px; font-size:0px; border:0px;" src="<?php /*echo Router::url('/', true);*/?>assets/img/email/StockBangladeshLogo.png"
                             width="100" height="65" alt="logo">
                    </td>
                </tr>-->
                <!-- end logo -->
                <tr>
                    <td height="20" style="border-collapse: collapse;"></td>
                </tr>

                <!-- content -->
                <tr>
                    <td align="center"
                        style="font-family: 'Open Sans', Arial, sans-serif;font-size: 12px;color: #ffffff;line-height: 26px;text-transform: uppercase;letter-spacing: 3px;border-collapse: collapse;">
                        Center For Financial Analysis.
                    </td>
                </tr>
                <!-- end content -->

                <tr>
                    <td height="40" style="border-collapse: collapse;"></td>
                </tr>
                <tr>
                    <td align="center" style="border-collapse: collapse;">
                        <?php echo $this->fetch('content'); ?>

                    </td>
                </tr>

                <!-- end profile-img -->

                <tr>
                    <td height="30" style="border-collapse: collapse;"></td>
                </tr>

                <!-- social -->
                <tr>
                    <td align="center" style="border-collapse: collapse;">
                        <table align="center" width="221" border="0" cellspacing="0" cellpadding="0"
                               style="border-spacing: 0;border-collapse: collapse;table-layout: auto;margin: 0 auto;">
                            <tr>
                                <td width="16" align="center" style="line-height: 0xp;border-collapse: collapse;">
                                    <a href="#" style="color: #21b6ae;text-decoration: none;">
                                        <img style="display:block; line-height:0px; font-size:0px; border:0px;"
                                             src="<?php echo Router::url('/', true);?>assets/img/email/facebook.png" width="8" height="16" alt="img">
                                    </a>
                                </td>
                                <td width="25" style="border-collapse: collapse;"></td>
                                <td width="16" align="center" style="line-height: 0xp;border-collapse: collapse;">
                                    <a href="#" style="color: #21b6ae;text-decoration: none;">
                                        <img style="display:block; line-height:0px; font-size:0px; border:0px;" src="<?php echo Router::url('/', true);?>assets/img/email/twitter.png"
                                             width="16" height="13" alt="img">
                                    </a>
                                </td>
                                <td width="25" style="border-collapse: collapse;"></td>
                                <td width="16" align="center" style="line-height: 0xp;border-collapse: collapse;">
                                    <a href="#" style="color: #21b6ae;text-decoration: none;">
                                        <img style="display:block; line-height:0px; font-size:0px; border:0px;"
                                             src="<?php echo Router::url('/', true);?>assets/img/email/googleplus.png" width="15" height="16" alt="img">
                                    </a>
                                </td>
                                <td width="25" style="border-collapse: collapse;"></td>
                                <td width="16" align="center" style="line-height: 0xp;border-collapse: collapse;">
                                    <a href="#" style="color: #21b6ae;text-decoration: none;">
                                        <img style="display:block; line-height:0px; font-size:0px; border:0px;"
                                             src="<?php echo Router::url('/', true);?>assets/img/email/linkedin.png" width="15" height="15" alt="img">
                                    </a>
                                </td>
                                <td width="25" style="border-collapse: collapse;"></td>
                                <td width="16" align="center" style="line-height: 0xp;border-collapse: collapse;">
                                    <a href="#" style="color: #21b6ae;text-decoration: none;">
                                        <img style="display:block; line-height:0px; font-size:0px; border:0px;" src="<?php echo Router::url('/', true);?>assets/img/email/behance.png"
                                             width="16" height="10" alt="img">
                                    </a>
                                </td>
                                <td width="25" style="border-collapse: collapse;"></td>
                                <td width="16" align="center" style="line-height: 0xp;border-collapse: collapse;">
                                    <a href="#" style="color: #21b6ae;text-decoration: none;">
                                        <img style="display:block; line-height:0px; font-size:0px; border:0px;"
                                             src="<?php echo Router::url('/', true);?>assets/img/email/dribbble.png" width="16" height="16" alt="img">
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- end social -->

                <tr>
                    <td height="30" style="border-collapse: collapse;"></td>
                </tr>

                <!-- copyright -->
                <tr>
                    <td align="center"
                        style="font-family: 'Open Sans', Arial, sans-serif;font-size: 13px;color: #ffffff;line-height: 30px;border-collapse: collapse;">
                        © <?php echo date('Y');?>
                        <a href="<?php echo Router::url('/', true);?>" style="font-weight: bold;color: #21b6ae;text-decoration: none;">Stock Bangladesh Ltd</a>
                        . All Rights Reserved.
                    </td>
                </tr>
                <!-- end copyright -->

                <tr>
                    <td height="40" style="border-collapse: collapse;"></td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>                        

