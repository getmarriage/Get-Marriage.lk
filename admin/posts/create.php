<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora:wght@600&display=swap" rel="stylesheet">

        <!-- Custom Styling -->
        <link rel="stylesheet" href="../../assets/css/style.css">

        <!-- Admin Styling -->
        <link rel="stylesheet" href="../../assets/css/admin.css">



        <title>Admin Section - Add Post</title>
    </head>

    <body>
        
       <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">

        
        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
       


            <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="create.php" class="btn btn-big">Add Post</a>
                    <a href="index.php" class="btn btn-big">Manage Posts</a>
                </div>

                <div class="content">

                    <h2 class="page-title">Add Posts</h2>

                    <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>
                    
                    <form action="create.php" method="post" enctype="multipart/form-data">
                        <div>
                        <label>Title</label>
                        <input type="text" name="title" value="<?php echo $title ?>" class="text-input">
                        </div>
                        <div>
                        <label>Body</label>
                        <textarea name="body" id="body"><?php echo $body ?></textarea>
                        </div>
                        <label>Image</label>
                        <input type="file" name="image" class="text-input">
                        </div>
                        <div>
                        <label>Topic</label>
                        <select name="topic_id" class="text-input">
                             <option value=""></option>
                             
                             <?php foreach ($topics as $key => $topic): ?>
                              <?php if (!empty($topic_id) && $topic_id == $topic['id'] ): ?>
                                <option selected value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                              
                              <?php else: ?>
                                <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                              <?php endif; ?>
                             
                             
                             <?php endforeach; ?>
                             
                             </select>
                        </div>
                        <br>
                        <div>
                            <?php if (empty($published)): ?>
                             <label>
                                   <input type="checkbox" name="published">
                                   publish
                             </label>
                            <?php else: ?>
                                <label>
                                   <input type="checkbox" name="published" checked>
                                   publish
                             </label>

                            <?php endif; ?>

                        </div>

<br>
                        <div>
                            <button type="submit" name="add-post" class="btn btn-big">Add Post</button>
                        </div>
                    </form>

                </div>

            </div>



                   <!-- // Admin Content -->


        </div>
        <!-- // Page Wrapper -->
        

        <!-- JQuary -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <!-- Ckeditor -->
        <script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>

        <!-- Custem Script -->
        <script src="../../assets/js/scripts.js"></script>

    </body>
</html>