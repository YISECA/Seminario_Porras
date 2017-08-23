@extends('master')                              

@section('content')         

<link rel="stylesheet" type="text/css" href="public/Css/form.css">

<link rel="stylesheet" type="text/css" href="public/Css/slider_styles.css">

<script src="public/Js/form.js"></script>
<script language="javascript" type="text/javascript">

    //*** Este Codigo permite Validar que sea un campo Numerico
    function Solo_Numerico(variable){
        Numer=parseInt(variable);
        if (isNaN(Numer)){
            return "";
        }
        return Numer;
    }
    function ValNumero(Control){
        Control.value=Solo_Numerico(Control.value);
    }
    //*** Fin del Codigo para Validar que sea un campo Numerico
    </script>

<section id="page1">

    <div class="panel panel-default">

        <div class="panel-heading">Inicio</div>

        <div class="panel-body">

            <div class="freebirdFormviewerViewFormContent ">

                <div class="freebirdFormviewerViewHeaderHeader">

                    <div class="freebirdFormviewerViewHeaderTitleRow">

                        <!--<div class="freebirdFormviewerViewHeaderTitle" dir="auto" role="heading" aria-level="1"><font size="5" face="Comic Sans MS,arial,verdana">FORMULARIO DE INSCRIPCIÓN DÍA DEL DESAFÍO 2017</font></div>-->

                    </div>
                    <center><h2><font size="5" face="Comic Sans MS,arial,verdana">SEMINARIO PORRAS</font></h2></center>
<br>
                    <div class="stage">

                        <div id="SLDR-ONE" class="sldr">

                            <ul class="wrp animate">

                                <li class="elmnt-one">                                 


                                        <div class="wrap"><img src="public/Img/porras.jpg"  height="400">


                                        </div>                                   
                                </li>

                               <li class="elmnt-two">
                                    
                                        <div class="wrap"><img src="public/Img/porras1.png"  height="400">
                                        </div>                                 
                                </li>

                                 <li class="elmnt-three">
                                    
                                        <div class="wrap"><img src="public/Img/porras2.png"  height="400">
                                        </div>                                 
                                </li>
                                 

                            </ul>

                        </div>

                        <div class="clear"></div>

                        <ul class="selectors">

                            <li class="focalPoint"><a href="">•</a></li>

                            <li><a href="">•</a></li>

                            <li><a href="">•</a></li>            
                         
                        </ul>

                    </div>

                    <script src="public/Js/jquery.sldr.js"></script>
                    <div class="freebirdFormviewerViewHeaderDescription" dir="auto">

                       

                        <p style="line-height: 27px; font-size: 12pt" align="justify"> Seminario internacional  de actualización en porras, organizado por el IDRD y la Federación Colombiana de Porrismo con la presencia de <strong>Andre Jorel Carter </strong> Director de educación de la USASF y <strong>Robert Torres</strong>,  Director para Latinoamérica de USASF y capacitador internacional. <br> Fecha: <strong>8 de septiembre</strong>
                       </p>

                       <center><h2><font size="5" face="Comic Sans MS,arial,verdana">FORMULARIO DE INSCRIPCIÓN AL SEMINARIO</font></h2></center>
                        
<br>

<form method="POST" action="insertar" id="form_gen" enctype="multipart/form-data">  

            <div class="panel-body">

<!-- nuevo formulario-->

<div class="row">
  <div class="col-xs-6 col-sm-4" align="right" style="position: relative;top: 8px;"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Nombre completo:</label></div>
  <div class="col-xs-6 col-sm-6"><input required type="text" class="form-control" id="nombre" name="nombre" onkeyup="javascript:this.value=this.value.toUpperCase();"></div>
</div>
  
  <br>
  <div class="row">
  <div class="col-xs-6 col-sm-4" align="right" style="position: relative;top: 8px;"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Documento:</label></div>
   <div class="col-xs-6 col-sm-6"><input required type="text" class="form-control" id="cedula" name="cedula"></div>
</div>

 <br>
  <div class="row">
  <div class="col-xs-6 col-sm-4" align="right" style="position: relative;top: 8px;"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Correo:</label></div>
   <div class="col-xs-6 col-sm-6"> 
       <input required type="mail" class="form-control" id="mail" name="mail">
   </div>
</div>

<br>
<div class="row">
  <div class="col-xs-6 col-sm-4" align="right" style="position: relative;top: 8px;"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Celular:</label></div>
   <div class="col-xs-6 col-sm-6"><input required type="number" class="form-control" id="celular" name="celular"></div>
</div>

<br>
<div class="row">
  <div class="col-xs-6 col-sm-4" align="right" style="position: relative;top: 8px;"><label class="freebirdFormviewerViewItemsItemItemTitle" for="formGroupExampleInput">Entidad o grupo que representa:</label></div>
   <div class="col-xs-6 col-sm-6"><input required type="text" class="form-control" id="entidad" name="entidad" onkeyup="javascript:this.value=this.value.toUpperCase();"></div>
</div>



         </fieldset>


         <div class="freebirdFormviewerViewFormContent "><div class="freebirdFormviewerViewHeaderHeader"><div class="freebirdFormviewerViewHeaderTitleRow"><div class="freebirdFormviewerViewHeaderTitle" dir="auto" role="heading" aria-level="1"></div></div><div class="freebirdFormviewerViewHeaderRequiredLegend" aria-hidden="true" dir="auto"></div></div><div class="freebirdFormviewerViewItemList" role="list"><div class="freebirdMaterialHeaderbannerLabelContainer freebirdFormviewerViewItemsPagebreakBanner" jsname="bLLMxc" role="heading"><div class="freebirdMaterialHeaderbannerLabelTextContainer freebirdSolidBackground freebirdMaterialHeaderbannerPagebreakBanner"><div class="freebirdMaterialHeaderbannerPagebreakText freebirdFormviewerViewItemsPagebreakBannerText"></div></div></div><div class="freebirdFormviewerViewItemsPagebreakDescriptionText"></div><div role="listitem" class="freebirdFormviewerViewItemsItemItem" jsname="ibnC6b" jscontroller="hIYTQc" jsaction="JIbuQc:qzJD1c;sPvj8e:e4JwSe" data-required="true" data-other-input="qSV85" data-other-hidden="MfYA1e" data-item-id="131124881"><div class="freebirdFormviewerViewItemsItemItemheader"><div class="freebirdFormviewerViewItemsItemItemTitleContainer"><div class="freebirdFormviewerViewItemsItemItemTitle" dir="auto" id="i1" role="heading" aria-level="2" aria-describedby="i.desc.131124881">Términos de inscripción <span class="freebirdFormviewerViewItemsItemRequiredAsterisk" aria-hidden="true">*<br><br><br><br></span></div><div class="freebirdFormviewerViewItemsItemItemHelpText" id="i.desc.131124881" dir="auto">Usted acepta y cumple con los requisitos exigidos en la presente Formulario.</div></div></div><div jsname="JNdkSc" role="group" aria-labelledby="i1" aria-describedby="i.desc.131124881 i.err.131124881 i.req.131124881" class=""><div class="" jsname="MPu53c" jscontroller="GJQA8b" jsaction="JIbuQc:aj0Jcf" data-value="Acepto"><div class="freebirdFormviewerViewItemsCheckboxChoice"><label class="docssharedWizToggleLabeledContainer freebirdFormviewerViewItemsCheckboxContainer"><div class="exportLabelWrapper"><input type="checkbox" required style="float: left;
          margin: 3px;" name="acepto" id="acepto"><div class="docssharedWizToggleLabeledContent"><div class="docssharedWizToggleLabeledPrimaryText"><span dir="auto" class="docssharedWizToggleLabeledLabelText freebirdFormviewerViewItemsCheckboxLabel">&nbsp;<font size="3">Acepto</font></span></div></div></div></label></div><input name="entry.1642827248" jsname="ekGZBc" disabled="" type="hidden"></div></div><div id="i.req.131124881" class="screenreaderOnly"></div><div jsname="XbIQze" class="freebirdFormviewerViewItemsItemErrorMessage" id="i.err.131124881" role="alert"></div></div></div><div class="freebirdFormviewerViewNavigationNavControls" jscontroller="lSvzH" jsaction="rcuQ6b:npT2md;JIbuQc:V3upec(GeGHKb),HiUbje(M2UYVd),NPBnCf(OCpkoe)" data-shuffle-seed="-2327421662174229681"><div class="freebirdFormviewerViewNavigationButtonsAndProgress"><div class="freebirdFormviewerViewNavigationButtons">



        <input class="enviar" type="submit" value="Enviar" href="registro"> 


                            </font>
   
  <script type="text/javascript">
            $(function () {
                $('#horas').datetimepicker({
                    format: 'LT'
                });
            });
        </script>

   
   <script src="{{ asset('public/Js/moment.js') }}"></script>
   <script src="{{ asset('public/Js/bootstrap.min.js') }}"></script>
   <script src="{{ asset('public/Js/bootstrap-datetimepicker.min.js') }}"></script>
   <script src="{{ asset('public/Css/bootstrap.min.css') }}"></script>
   <script src="{{ asset('public/Css/bootstrap-datetimepicker.min.css') }}"></script>



            </form>

           
</div>

                </div>

            </div>

        </div>

       </section>

@stop