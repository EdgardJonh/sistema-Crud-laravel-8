formulario de creacion empleados

<form action="{{url('/equipos')}}" method="post" enctype="multipart/form-data">
    @csrf
    <label for='numero'>Numero de Orden</label>
    <input type="text"  name="num_Orden">
    <br>
    <label for='fecha'>Fecha</label>
    <input type="date" name="fecha">
    <br>
    <label for='serie'>Serie</label>
    <input type="text" name="serie">
    <br>
    <label for='numero_documento'>Numero de Documento</label>
    <input type="text" name="n_ocumento">
    <br>
    <label for='estado_equipo'>Estado de Equipo</label>
    <input type="text" name="Estado_Equipo">
    <br>
    <label for='tecnico'>Nombre Tecnico</label>
    <input type="text" name="tecnico">
    <br>
    <label for='fecha_entrega'>Fecha entrega</label>
    <input type="date" name="fecha_Entrega">
    <br>
    <label for='Personal_retiro'>Personal Retiro</label>
    <input type="text" name="personal_Retiro">
    <br>
    <label for='Acta Entrega'>Acta de Entrega</label>
    <input type="text" name="Acta_de_Entrega">
    <br>
    <label for='Numero_info'>Numero informacion de tecnico baja</label>
    <input type="text" name="num_info_Tec_Baja">
    <br>
    <label for='foto'>Foto informacion Tecnico</label>
    <input type="file" name="foto_Info_Tec">
    <br>
    <label for='Numero_resolucion'>Numero de Orden</label>
    <input type="text" name="num_Resulucion_Baja">
    <br>
    <label for='Numero'>Guardar</label>
    <input type="submit" value='Guardar Datos'>
</form>