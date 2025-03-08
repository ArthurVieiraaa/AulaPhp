<?php
include('protect.php');
?>

<div class="forum">
    <h1>Fórum:</h1>
    <button id="button-forum"><i class="fa-solid fa-plus"></i></button>
    <div id="forum" style="display: none;" class="toast">
        <div class="toast-container toast-centered">
            <div class="toast-content">
                <div class="toast-h">
                    <h5>Informações do Post:</h5>
                    <i id="close-forum" class="fa-solid fa-xmark"></i>
                </div>
                <div class="toast-b">
                    <form method="POST">
                        <label for="descricao">Descrição:</label>
                        <textarea id="descricao" name="descricao" placeholder="Digite a Descrição..." required></textarea>
                        <label for="imagem">Imagem:</label>
                        <input type="file" id="imagem" name="imagem" required>
                        <button type="submit">Adicionar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <h2>Adicionar Post:</h2>
    </form>
    <div class="forum-content">
        <div>
            <img src="assets/img/PC.jpg" alt="">
            <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae reprehenderit quas consequatur saepe laudantium accusantium provident inventore veritatis hic maxime placeat, delectus praesentium nulla ratione et asperiores! Rerum, suscipit totam.</h3>
        </div>
        <div>
            <img src="assets/img/Sala.jpg" alt="">
            <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Pariatur officiis in odit. Voluptatem sit eveniet doloremque, enim commodi accusamus voluptatum saepe, beatae, recusandae distinctio dolorem ut omnis aspernatur excepturi iusto.</h3>
        </div>
        <div>
            <img src="assets/img/Festa.jpg" alt="">
            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum obcaecati placeat expedita dignissimos reiciendis saepe excepturi ullam neque pariatur libero quibusdam enim, consequatur amet animi iste nostrum facere consequuntur voluptas.</h3>
        </div>
    </div>
</div>