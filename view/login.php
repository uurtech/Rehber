
<div class="container">
  <div class="profile">
    <button class="profile__avatar" id="toggleProfile" <?php if(isset($_GET['err'])) echo 'style="border:2px solid red;"'; ?>>
     <img src="https://media.licdn.com/mpr/mpr/shrinknp_200_200/AAEAAQAAAAAAAAZUAAAAJGMzMzIwN2FjLWU2NTQtNGYyNC1hMjBmLTc3ZWJjZjZmNzRhOA.jpg" alt="Avatar" />
    </button>
    <form action="login.php" method="post">
    <div class="profile__form">
      <div class="profile__fields">
        <div class="field">
          <input type="text" id="fieldUser" name="username" class="input" required pattern=.*\S.* />
          <label for="fieldUser" class="label">Username</label>
        </div>
        <div class="field">
          <input type="password" id="fieldPassword" name="password" class="input" required pattern=.*\S.* />
          <label for="fieldPassword" class="label">Password</label>
        </div>
        <div class="profile__footer">
          <button class="button">Login</button>
        </div>
      </div>
     </div>
   </form>
  </div>
</div>

        <script src="js/index.js"></script>
