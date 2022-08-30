Login: el login se encuentra directo, no esta realizando ninguna validación al momento
para hacerlo funcional solo seria validar las credenciales del usuario para el inicio de sesion,
solo es una demo

al dar inicio desde el login, va iniciar en la interfaza de ventas, al lado izquierdo encontramos el navbar o el menú el cual podemos navegar en las diferentes opciones.

el archivo ventas.php vamos hallar un formulario el cual nos va a permitir el registro de venta, seleccionamos el nombre del producto y la referencia y nos traerá por defecto el precio stock del producto seleccionado, ponemos la cantidad a vender y damos click en vender, si la cantidad a vender es mayor al stock no se va a registrar la venta y si no hay stock tampoco se va a realizar, mostrando un alert de que no es posible la venta, de lo contrario el alert será que la venta se realizó.

en la parte de abajo del formulario vamos hallar una tabla o data-table que va llevar los registros de las ventas realizadas, el cual lo podemos filtrar por cada uno de los td de cada columna  y realizar la búsqueda de la venta por cualquier registro de la tabla.

en esta interfaz se va a ver una opción que dice stoc-registro de productos o al lado izquierdo en el menú o navbar está la opción de stock y registrar productos el archivo es Stock.php, aquí nos cargara la vista para registrar los productos a la DB, diligenciamos los campos y damos guardar, no va dejar guardar ningún producto si los campos no son diligenciados completamente ya que todos son obligatorio, al guardar el producto el sistema captura la fecha y hora en que se registró ese nuevo producto.

en la parte de abajo vamos hallar una tabla que nos listara todos los productos que han sigo guardados en la DB, en esta tenemos la opción de eliminar y editar, para eliminar seleccionamos el checkbox y damos click en el botón el eliminar y para editar damos click en el botón que está dentro de la fila que queremos editar este nos en rutará a otra vista donde se capturará el id del registro seleccionado y nos mostrará el formulario diligenciado con los datos que se encuentran actualmente, diligenciamos el dato actualizar ya damos click en actualizar, en esta interfaz también todos los campos deben estar diligenciados para poder realizar la actualización ya que son obligatorios, si no queremos solo le damos click en la opción de stock- registro de productos o en alguna opción del menú o navbar del lado izquierdo.

los otro archivo como los que inician con nombre get, se usan para la validación de los select que dependen uno del otro y los editar, eliminar, enviar y vender son los archivos que por medio de método POST capturan los datos para realizar la acción que corresponde a cada archivo y el archivo de conexión a la DB.