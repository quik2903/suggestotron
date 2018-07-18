<?php
require 'TopicData.php';

$data = new TopicData();
$data->connect();

$topics = $data->getAllTopics();
?>
<!doctype html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
        <script type="text/javascript" src="/js/jquery-3.3.1.slim.min.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <title>Suggestotron</title>
    </head>
    <body>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Suggestotron</a>
                </div>
            </div>
        </nav>

        <form class="navbar-form navbar-right" role="search">
            <a href="/add.php" class="btn btn-default">
                <span class="glyphicon glyphicon-plus-sign"></span>
                Add Topic
            </a>
        </form>

        <div class="container">
            <?php
            foreach ($topics as $topic) {
                ?>
                <section>
                    <div class="row">
                        <div class="col-xs-12">
                            <h3><?=$topic['title'];?></h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <p class="text-muted">
                                <?=nl2br($topic['description']);?>
                            </p>
                        </div>
                        <div class="col-xs-4">
                            <p class="pull-right">
                                <a href="/edit.php?id=<?=$topic['id']; ?>" class="btn btn-primary">Edit</a>
                                <a href="/delete.php?id=<?=$topic['id']; ?>" class="btn btn-danger" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="top" data-title="Are you sure?" data-content=" This cannot be undone!">Delete</a>
                            </p>
                        </div>
                    </div>
                </section>
                <hr>
                <?php
            }
            ?>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $('[data-toggle="popover"]').popover();
        </script>        
    </body>
</html>