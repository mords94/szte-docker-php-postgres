<div class="container">
    <div class="row">
        <div class="panel panel-primary">
            <div class="panel-header">
                <h3>Iskolák</h3>
            </div>

            <div class="panel-body">
                <ul>
                    <h5>
                    <?php foreach ($schools as $school): ?>
                        <li>#<?= $school['id'] ?>: <?= $school['name'] ?>
                            <a href="/delete_school/<?= $school['id'] ?>">
                                <i class="glyphicon glyphicon-remove"></i>
                            </a>
                        </li>
                    <?php endforeach; ?>
                    </h5>
                </ul>


                <form role="form" action="/store_school" method="POST" class="form-horizontal">
                    <div class="form-group-lg">
                        <input type="text" class="form-control-static" name="school" placeholder="Iskola neve" required/>
                    </div>

                    <br>
                    <button type="submit" class="btn btn-primary btn-sm">
                        Mentés
                    </button>
                </form>

            </div>
        </div>


    </div>
</div>
