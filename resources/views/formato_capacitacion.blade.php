@extends('layouts.app')

@section('content')
<div class="container" ng-app="llenarFormatosApp" ng-controller="MainCtrl">
    <div class="panel panel-info">
          <div class="panel-heading">
                <h3 class="panel-title">Formato de Eventos</h3>
          </div>
          <div class="panel-body">
                <form class="" action="" method="POST" >     
                {{ csrf_field() }}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                            <div class="form-group {{ $errors->has('gerente_nacional') ? ' has-error' : '' }}">
                                <label for="">Gerente Nacional:</label>
                                <input type="text" class="form-control" name="gerente_nacional"  placeholder="">
                                @if ($errors->has('gerente_nacional'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gerente_nacional') }}</strong>
                                    </span>
                                @endif
                            </div>       
                        </div> 
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">                                                                
                            <div class="form-group">
                                <label for="">Fecha de solicitud:</label>
                                <input type="date"  name="fecha_solicitud" class="form-control" value=""  title="">
                            </div>               
                       </div>
                    </div>     
                    <div class="row">
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="form-group">
                                    <label for="">Coordinador  de asistencia al evento:</label>
                                    <input type="text" class="form-control" name="coordinador_evento" placeholder="">
                                </div>     
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="form-group">
                                    <label for="">Puesto</label>
                                    <input type="text" class="form-control" name="puesto_coordinador" placeholder="">
                                </div> 
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <div class="form-group">
                                    <label for="">Centro</label>
                                    <input type="text" class="form-control" name="centro_coordinador" placeholder="">
                                </div> 
                              </div>
                          </div>      
                    <div class="form-group">
                        <label for="">Tipo de evento:</label>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="evento_tecnologico" value="">
                                Evento Tecnológico
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="expo"e value="">
                                Expo
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="briefing" value="">
                                Briefing
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="congreso" value="">
                                Congreso
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="diplomado" value="">
                                Diplomado
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="taller" value="">
                                Taller
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="visitas_proveedor" value="">
                                Visitas a Proveedor
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name ="foro" value="">
                                Foro
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="curso" type="checkbox" value="">
                                Curso
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="simposium" type="checkbox" value="">
                                Simposium
                            </label>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                <input type="text" name="otro_tipo_evento" class="form-control" value=""placeholder="Otro"   title="">    
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="">Nombre del Evento</label>
                                <input type="text" class="form-control" name="nombre_evento" placeholder="">
                            </div>                                    
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="">Fecha de inicio:</label>
                                <input type="date" name="fecha_inicio"class="form-control" value=""  title="">
                            </div>                                     
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="">Fecha final:</label>
                                <input type="date" name="fecha_final" class="form-control" value=""  title="">
                            </div>                                         
                        </div>
                    </div>                   
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="">Duración(hrs)</label>
                                <input type="number" class="form-control" name="duracion_evento" placeholder="">
                            </div>  
                            
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="lugar_evento">Lugar del Evento</label>
                                <input type="text" class="form-control" name="lugar_evento" placeholder="">
                            </div> 
                            
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="">Carnet regalado</label>
                                <input type="checkbox"  name="carnet_regalado" placeholder="">
                            </div>                                      
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <input type="number" class="form-control" name="carnet_regalado_cuantos" placeholder="Cuantos">
                            </div>                                                         
                        </div>
                    </div>  
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="">Proveedor que proporcionó carnet</label>
                                <input type="text" class="form-control" name="proveedor_carnet" placeholder="">
                            </div>     
                            
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="">Costo Carnet</label>
                                <input type="number" class="form-control" name="costo_carnet" placeholder="">
                            </div>     
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Si el Proveedor cubre gastos de viaje, indica que paga:</label>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="avion" value="">
                                Avion
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="hotel" value="">
                                Hotel
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="comidas" value="">
                                Comidas
                            </label>
                        </div>
                        <div class="row">
                            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                <input type="text" name="otro_gastos_proveedor" class="form-control" value=""placeholder="Otro"   title=""> 
                                
                            </div>
                        </div>
                    </div>    
                    <div class="form-group">
                            <label>Se requiere solicitar Viáticos
                            </label>
                            <input type="checkbox" name="solicitar_viaticos"value="">
                    </div>   
                    <label for="objetivo_evento">Objetivo del evento:</label>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <textarea class="form-control noresize "  rows="6" name="objetivo_evento"></textarea>
                            </div> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Link del Evento</label>
                        <input type="text" class="form-control" name="link_evento" placeholder="">
                    </div>   
                    <label for="objetivo_evento">Justificacion del evento:</label>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <textarea class="form-control noresize "  rows="6" name="justificacion_evento"></textarea>
                            </div>                                     
                        </div>
                    </div>
                    <div style="display:block">
                        <label>Asistentes</label><button type="button" class="btn" ng-click="addAsistente()">+</button>
                    </div>
                    <input type="text" name="cont_asistentes" hidden value="<%contAsistentes+1%>" />
                    <div style="display:block" ng-repeat="asistente in Asistentes">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                    <label for="">Nombre</label>
                                    <input type="text" value="<%asistente.nombre%>" class="form-control" name="nombre_asistente<%contAsistentes + 1%>" placeholder="">
                                    
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                    <label for="">puesto</label>
                                    <input type="text" value="<%asistente.puesto%>" class="form-control" name="puesto_asistente<%contAsistentes + 1%>" placeholder="">
                                    
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                    <label for="">centro</label>
                                    <input type="text" value="<%asistente.centro%>" class="form-control" name="centro_asistente<%contAsistentes + 1%>" placeholder="">
                                    
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                    <label for="">funcion</label>
                                    <input type="text" value="<%asistente.funcion%>" class="form-control" name="funcion_asistente<%contAsistentes + 1%>" placeholder="">
                                    
                                </div>
                            </div>
                            <button type="button" class="btn" ng-click="removeAsistente()">-</button>
                        </div>                       
                    </div> 
                    <div class="form-group">
                        <label for="">Anexo:</label>
                        <textarea class="form-control noresize " rows="6"name="anexo"></textarea>
                    </div>      
                    <div style="display:block">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
          </div>
    </div>
</div>
@if(isset($request))
<iframe hidden = "hidden" src="{{ url('formato_capacitacion/download?') . http_build_query(   $request->all() )  }}"></iframe>
<?
    unset($request) ;
?>
@endif

@stop
