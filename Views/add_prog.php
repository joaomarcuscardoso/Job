<div class="container">
    <div class="row">

        <div class="col-sm-2"></div>
        <div class="col-sm-8">
        
            <h3 style="text-align:center;margin:25px 0 15px 0px;">Adicionar Programador</h3>
            <?php if(!empty($message)): ?>
                <div class="alert alert-danger" role="alert"><?php echo $message; ?></div>
            <?php endif; ?>
            
            <form method="POST" class="form-group">
                <label for="name">Nome</label>
                <input type="text" class="form-control" name="name" id="name"  placeholder="nome...">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" id="email"  placeholder="email...">
                <label for="age">Idade</label>
                <input type="text" class="form-control" name="age" id="age" placeholder="idade...">
                <label for="linkedin">Linkedin</label>
                <input type="text" class="form-control" name="linkedin" id="linkedin"placeholder="linkedin...">
                <label for="languages">Linguagem de programação</label>
                <input type="text" class="form-control" name="languages" id="languages"placeholder="habilidades...">
                <label for="employee">Trabalhando</label>
                <input type="checkbox" name="employee" id="employee"/>
                <input type="submit" value="Adicionar" class="form-control btn btn-success" />
            </form>
    
        </div>
        <div class="col-sm-2"></div>
    </div>

</div>
