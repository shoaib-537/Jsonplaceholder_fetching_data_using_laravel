
<?php $__env->startSection('content'); ?>
    
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap");

        *,
        *::before,
        *::after {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        body {
            font-family: "Quicksand", sans-serif;
            display: grid;
            place-items: center;
            height: 100vh;
            background: #7f7fd5;
            background: linear-gradient(to right, #91eae4, #86a8e7, #7f7fd5);
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            max-width: 1200px;
            margin-block: 2rem;
            gap: 2rem;
        }

        .card__header {
            display: flex;
            flex-direction: row;
            align-items: center;

        }

        img {
            max-width: 100%;
            display: flex;
            object-fit: contain;

        }

        .card {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: clamp(32rem, calc(18rem + 2vw), 18rem);
            overflow: hidden;
            box-shadow: 0 .1rem 1rem rgba(0, 0, 0, 0.1);
            border-radius: 1em;
            background: #ECE9E6;
            background: linear-gradient(to right, #FFFFFF, #ECE9E6);

        }



        .card__body {
            padding: 1rem;
            display: flex;
            flex-direction: column;
            gap: .5rem;
        }


        .tag {
            align-self: flex-start;
            padding: .25em .75em;
            border-radius: 1em;
            font-size: .75rem;
        }

        .tag+.tag {
            margin-left: .5em;
        }

        .tag-blue {
            background: #56CCF2;
            background: linear-gradient(to bottom, #2F80ED, #56CCF2);
            color: #fafafa;
        }

        .tag-brown {
            background: #D1913C;
            background: linear-gradient(to bottom, #FFD194, #D1913C);
            color: #fafafa;
        }

        .tag-red {
            background: #cb2d3e;
            background: linear-gradient(to bottom, #ef473a, #cb2d3e);
            color: #fafafa;
        }

        .card__body h4 {
            font-size: 1.5rem;
            text-transform: capitalize;
        }

        .card__footer {
            display: flex;
            padding: 1rem;
            margin-top: auto;
        }

        .user {
            display: flex;
            gap: .5rem;
        }

        .user__image {
            border-radius: 50%;
        }

        .user__info>small {
            color: #666;
        }
    </style>
    <div>
        <?php $__currentLoopData = $collections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $collection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="container">
                <div class="card">
                    <div class="card__header">
                        <img 
                        
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/2048px-No_image_available.svg.png"
                            alt="card__image" class="card__image" width="200">
                    </div>
                    <div class="card__body">
                        <span class="tag tag-blue">User # <?php echo e($collection['userId']); ?></span>
                        <span class="tag tag-blue">Blog # <?php echo e($collection['id']); ?> </span>
                        <h4><?php echo e($collection['title']); ?></h4>
                        <p><?php echo e($collection['body']); ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ast\resources\views/index.blade.php ENDPATH**/ ?>