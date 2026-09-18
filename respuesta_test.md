Informe tecnico

1. Cliente vs Servidor

El cliente descarga y ejecuta ficheros html,css y javascritp de forma visible e interpretado por el motor del navegador, el usuario puede modificar el codigo en el navegador y algunos frameworks amplian logica ejecutable del cliente.

El servidor ejecuta solo codigo servidor (php,python...), consulta dentro de base de datos y genera codigo html que envia de vuelta al cliente.

La regla de oro de nunca confiarse del cliente.Un cliente cualquiera que tenga acceso puede manipular la informacion a su antojo entonces pone en peligro la seguridad del proyecto. 

2. Paginas Dinamicas vs Estaticas

ideal para tiendas ya que mantiene seguro los datos de la tienda en una base de datos donde los clientes no tienen acceso a sus datos a no ser que sea por una peticion al servidor consulta y actualiza los datos a tiempo real.

mientras que el statico utiliza un html por lo cual es fijo por lo cual no hay stock que funcione correctamente y no hay cuentas, cambio manual de datos, no hay gestion de inventario,pedidos...

3. La infraestructura(Servidores)