<div class="row">
    <div class="col-sm-12">
        <h3 class="title-h3"> Lista de Programadores</h3>
        <div class="container-add-filters">
        
            <a href="<?php echo BASE_URL; ?>Home/add_prog/"  class="btn btn-success btn-container" >Adicionar Programador</a>
            <div class="container-filters">
                <form method="GET" class="form-container-home">
                    
            
                    <input type="text" name="search" id="search" placeholder="nome, linguagem..." />
                    <input type="submit" value="filtar" class="btn btn-success" />
                    
                </form>
 
            </div>
        </div>

        
        <table class="table table-hover table-dark table-container" >
            <thead>
                <tr >
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Linguagens</th>
                    <th scope="col">Linkedin</th>
                    <th scope="col">Empregado</th>

                    
                </tr>
            </thead>
            <?php foreach($programadores as $progAll): ?>
            <tbody width="100%" height="100%">
                <tr class="hover-table">
                    <td><?php echo $progAll['name']; ?></td>
                    <td><?php echo $progAll['email']; ?></td>
                    <td><?php echo $progAll['age']; ?></td>
                    <td><?php echo $progAll['languages']; ?></td>
                    <td><a href="<?php echo $progAll['linkedin']; ?>">Ver</a></td>
                    <td>
                        <?php  if($progAll['employee'] == 0): ?>
                            
                            <a href="<?php echo BASE_URL; ?>Home/employee/?i=<?php echo $progAll['id']; ?>" >
                                
                                <img src="<?php echo BASE_URL; ?>assets/images/employee.png" alt="not employee"/> 
                            </a>
                        <?php else: ?>
                            <a href="<?php echo BASE_URL; ?>Home/employee/?i=<?php echo $progAll['id']; ?>" >

                                <img src="<?php echo BASE_URL; ?>assets/images/not_employee.png" alt="employee" /> 
                            </a>
                        <?php endif; ?>
                
                    </td>
                </tr>
                </tr>

            </tbody>
            <?php endforeach; ?>
        </table>
    
    </div>

</div>