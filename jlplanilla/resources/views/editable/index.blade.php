@extends('layouts.app')

@section('content')
{{--*/ usort($tableGrid, "SiteHelpers::_sort") /*--}}
  <div class="page-content row">

	
	<div class="page-content-wrapper m-t">	 	
		
				 <div class="form-group  " >
			<label for="Habilitado" class=" control-label col-md-2 text-left"> Concepto a modificar </label>
			<div class="col-md-7">
				{!! Form::open(array('url'=>'captura_habilitado', 'class'=>'form-horizontal')) !!} 
                                    {!!  Form::select('habilitado', $habilitado,null,['class'=>'form-control' ])  !!}
									
	
			</div> 
			<div class="col-md-1">
				<button class="btn btn-primary btn-xs" type="submit" > <i class=""></i>
						  <span class=""></span>Buscar</button>
									
				 {!! Form::close() !!}
			</div>
		</div>
		<br><br><br><br>


	<div class="sbox">
	<div class="sbox-title">
		<div class="sbox-tools pull-left" >
			@if($access['is_add'] ==1)
	   		<a href="{{ URL::to('editable/update?return='.$return) }}" class="tips btn btn-xs btn-default"  title="{{ Lang::get('core.btn_create') }}">
			<i class="fa  fa-plus "></i></a>
			@endif  
			@if($access['is_remove'] ==1)
			<a href="javascript://ajax"  onclick="SximoDelete();" class="tips btn btn-xs btn-primary btn-sm btn-circle" title="{{ Lang::get('core.btn_remove') }}">
			<i class="fa fa-trash-o"></i></a>
			@endif 
			<a href="{{ URL::to( 'editable/search?return='.$return) }}" class="tips btn btn-xs btn-warning btn-sm btn-circle" onclick="SximoModal(this.href,'Advance Search'); return false;" title="{{ Lang::get('core.btn_search') }}"><i class="fa  fa-search"></i> </a>				


		</div>

		<div class="sbox-tools" >
			@if($access['is_excel'] ==1)
			<a href="{{ URL::to('editable/download?return='.$return) }}" class="tips btn btn-xs btn-primary btn-sm btn-circle" title="{{ Lang::get('core.btn_download') }}">
			<i class="fa fa-cloud-download"></i></a>
			@endif

			<a href="{{ url($pageModule) }}" class=" tips btn btn-xs btn-warning btn-sm btn-circle"  title="{{ Lang::get('core.btn_clearsearch') }}" ><i class="fa fa-spinner"></i>  </a>		
			@if(Session::get('gid') ==1)
				<a href="{{ URL::to('sximo/module/config/'.$pageModule) }}" class="tips btn btn-xs btn-info btn-sm btn-circle" title=" {{ Lang::get('core.btn_config') }}" ><i class="fa  fa-ellipsis-v"></i></a>
			@endif 
		</div>
	</div>

	<div class="sbox-content"> 	
	

	 {!! (isset($search_map) ? $search_map : '') !!}
	
		
		
	 {!! Form::open(array('url'=>'editable/delete/0?return='.$return, 'class'=>'form-horizontal' ,'id' =>'SximoTable' )) !!}
		
	 <div class="table-responsive" style="min-height:300px;  padding-bottom:60px;">
		 
    <table class="table table-striped ">
        <thead>
			<tr>
				<th class="number"><span> No </span> </th>
				<th> <input type="checkbox" class="checkall" /></th>
				<th ><span>{{ Lang::get('core.btn_action') }}</span></th>
				

						
							<th><span>Nombres</span></th>			
						    <th><span>
							@if(isset($campo)) 
                            {{ $campo }}
                            @endif
							</span></th>
	
			  </tr>
        </thead>

        <tbody>        						
            @foreach ($rowData as $row)
                <tr>
					<td width="30"> {{ ++$i }} </td>
					<td width="50"><input type="checkbox" class="ids" name="ids[]" value="{{ $row->planilla_id }}" />  </td>	
					<td>
					 	<div class="dropdown">
						  <button class="btn btn-primary btn-xs dropdown-toggle" type="button" data-toggle="dropdown"> <i class="fa fa-cog"></i>
						  <span class="caret"></span></button>
						  <ul class="dropdown-menu">
						 	@if($access['is_detail'] ==1)
							<li><a href="{{ URL::to('editable/show/'.$row->planilla_id.'?return='.$return)}}" class="tips" title="{{ Lang::get('core.btn_view') }}"><i class="fa  fa-search "></i> {{ Lang::get('core.btn_view') }} </a></li>
							@endif
							@if($access['is_edit'] ==1)
							<li><a  href="{{ URL::to('editable/update/'.$row->planilla_id.'?return='.$return) }}" class="tips" title="{{ Lang::get('core.btn_edit') }}"><i class="fa fa-edit "></i> {{ Lang::get('core.btn_edit') }} </a></li>
							@endif
						  </ul>
						</div>

					</td>


						 <td>
							{{ SiteHelpers::formatLookUp($row->id_trabajador,'id_trabajador','1:jl_empleados:id_trabajador:ape_paterno') }} 
						 	{{ SiteHelpers::formatLookUp($row->id_trabajador,'id_trabajador','1:jl_empleados:id_trabajador:ape_materno') }} ,
							{{ SiteHelpers::formatLookUp($row->id_trabajador,'id_trabajador','1:jl_empleados:id_trabajador:nombres') }}
						 </td>
						
					 <td>	@if(isset($row->{Session::get('codigo_itd')})) 				 
						 	{{ $row->{Session::get('codigo_itd')} }}						 
						    @endif
						 </td>
                </tr>
				
            @endforeach
              
        </tbody>
      
    </table>
	<input type="hidden" name="md" value="" />
	</div>
	{!! Form::close() !!}
	@include('footer')
	</div>
</div>	
	</div>	  
</div>
<script type="text/javascript">
	</script>
	
@stop