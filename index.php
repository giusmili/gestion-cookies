<?php
    include_once __DIR__ .'/controller/controllerCookie.php';
    include_once __DIR__ .'/view/header.inc.php'
?>
<!-- head -->
<body>
  <header>
    <img src="./public/asset/redman.png" alt="cover">
    <div class="container">
      <h1>Max Mustermann</h1>
      <h2>Web Developer and Web Designer in Germany</h2>
      <p>
        The sea between us and the coast was of a dull green shade; there was a fresh breeze blowing, mists floated above the water like spray. Numerous vessels, brigs and schooners, were awaiting the tide; steamers puffing away their black smoke were soon distanced by the 'Great Eastern,' although she was going at a very moderate speed.
      </p>
      <br/>
      <a href="#skill-section" class="read-more">Read More</a>
    </div>
  </header>
  <section id="skill-section">
    <h2>My Skillset</h2>
    <div class="wrapper">
      <div class="skill-container">
        <h3>Front-End</h3>
        <ul>
          <li>Adobe Photoshop <progress max="100" value="80"></progress> </li>
          <li>HTML, CSS <progress max="100" value="100"></progress> </li>
          <li>JavaScript <progress max="100" value="100"></progress> </li>
          <li>React.js <progress max="100" value="70"></progress> </li>
        </ul>
      </div>
      <div class="skill-container">
        <h3>Back-End</h3>
        <ul>
            <li>Express.js <progress max="100" value="70"></progress> </li>
            <li>Node.js <progress max="100" value="70"></progress> </li>
            <li>Python <progress max="100" value="50"></progress> </li>
            <li>Java <progress max="100" value="70"></progress> </li>
        </ul>
    	</div>
    </div>
  </section>
  <section id="projects-section">
    <h2>My Top 3 Projects</h2>
    <div class="flex-container">
      <details>
        <summary>
          <span class="number">1</span>
          <h3>To-Do List App</h3>
        </summary>
        <div class="text-container">
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis, a animi. Accusamus animi earum reprehenderit rem! Neque corporis aperiam atque asperiores animi provident fugiat quaerat ipsam cupiditate accusantium rerum expedita explicabo id fugit nam beatae ducimus nihil velit, quasi laboriosam quis magnam! Esse, porro sit? Tempore ex, adipisci praesentium quae, mollitia laudantium rem sapiente dignissimos, molestiae eius obcaecati fugiat. Beatae quod iusto voluptas aspernatur amet! Non fugit esse laborum dignissimos voluptatem laboriosam, aliquam voluptate sapiente omnis. Repellat nesciunt eligendi alias quaerat similique minima ut dignissimos amet voluptatem. Minima omnis itaque architecto, minus veritatis, similique ipsam numquam vero, vel quia cupiditate!</p>
          <a href="http://nouvelle-techno.fr" 
          class="project-link" 
          target="blank" 
          ping="./controller/ping.php">Visit Website</a>
        </div>
      </details>
      <details>
        <summary><span class="number">2</span><h3>Calculator App</h3></summary>
        <div class="text-container">
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores, consequatur dolorum totam quos magni odio, dignissimos nostrum necessitatibus officiis qui blanditiis itaque eaque obcaecati enim repudiandae! Quam incidunt nihil iusto sequi, iste est dolores vitae esse quibusdam sint quod tempore officia blanditiis maiores a nisi. Impedit, tenetur magnam laborum placeat tempore debitis veniam odit minus dignissimos suscipit quam saepe cupiditate distinctio aliquam voluptatum error reprehenderit qui. Sit quisquam, itaque ut excepturi sunt earum quia. Ab exercitationem voluptatum explicabo laboriosam ea excepturi vero optio voluptatem culpa doloremque maiores, amet ipsam beatae architecto recusandae nostrum tempore repudiandae quaerat, unde natus. Inventore, blanditiis.</p>
          <a href="http://youtube.com"  target="blank" 
          ping="./controller/ping.php" 
          class="project-link">Visit Website</a>
        </div>
      </details>
      <details>
        <summary><span class="number">3</span><h3>Fitness Tracker</h3></summary>
        <div class="text-container">
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores consequuntur odit distinctio pariatur, vitae doloribus possimus labore aspernatur rem saepe aliquid accusamus tempora libero temporibus quia. Cum eveniet eligendi aspernatur sit sapiente dolor, quos facilis placeat saepe architecto minima. Quo, ad iure. Illo aut totam magni consectetur earum tenetur ipsam vel ab minus quod iste rem hic quis harum esse, fugiat quam ullam ipsum soluta. Optio nisi rerum, quasi id saepe quisquam. Beatae, non. Eveniet ut beatae deleniti doloribus et accusamus veritatis expedita. Aliquam, quidem debitis. A aliquid repellat debitis vero odio optio possimus, eveniet quasi illum sint provident earum.</p>
          <a class="project-link">Visit Website</a>
        </div>
      </details>
    </div>
  </section>
  <footer>
    <p>
      &copy; - Portfolio - 2025
    </p>

  </footer>
    <?php
        include_once __DIR__ .'/view/message.inc.php'

    ?>

   <!--  <h1>Bienvenue sur notre site</h1>
    <p>Contenu principal du site...</p> -->
</body>
</html>