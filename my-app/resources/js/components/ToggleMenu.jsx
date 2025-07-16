import React, { useState } from 'react';

function ToggleMenu() {
  const [isOpen, setIsOpen] = useState(false);

  const handleToggle = () => setIsOpen(!isOpen);

  return (
    <div>
      <button onClick={handleToggle} className="btn d-flex align-items-center border-end rounded-0 py-2">
        <i className="fa-solid fa-bars ms-4 me-4"></i>
        <h6 class ="mt-2">Menu</h6>
      </button>

      <div className={isOpen ? 'menu open' : 'menu'}>
        <div className="scroll-box">
          <div className="d-flex align-items-center">
            <i className="fa-solid fa-house"></i>
            <h6 className="mx-4">A la Lune</h6>
            <button onClick={handleToggle}><i className="fa-solid fa-x"></i></button>
          </div>

          <img src="./images/le_siecle_logo.webp" alt="Logo" />

          <ul className="menu-list">
            <li><strong><a href="#">Liban</a></strong></li>
            <li><a href="#">Toute l’actualité du Liban</a></li>
            <li><a href="#">Politique</a></li>
            <li><a href="#">Société</a></li>
            <li><a href="#">Environnement</a></li>
            <li><a href="#">Agenda</a></li>
            <li><a href="#">Diaspora</a></li>
            <li><a href="#">Campus</a></li>
            <hr />
            <li><strong><a href="#">Vidéos</a></strong></li>
            <hr />
            <li><strong><a href="#">Monde</a></strong></li>
            <li><a href="#">Toute l’actualité internationale</a></li>
            <li><a href="#">Moyen-Orient</a></li>
            <li><a href="#">Monde</a></li>
            <hr />
            <li><strong><a href="#">Économie</a></strong></li>
            <hr />
            <li><strong><a href="#">Culture</a></strong></li>
            <li><a href="#">Arts</a></li>
            <li><a href="#">Lifestyle</a></li>
            <li><a href="#">📅 Agenda Culturel</a></li>
            <li><a href="#">Cinéma</a></li>
            <li><a href="#">L'Orient Littéraire</a></li>
            <hr />
            <li><strong><a href="#">Sport</a></strong></li>
            <hr />
            <li><strong><a href="#">Opinions</a></strong></li>
            <li><a href="#">Éditos & plus</a></li>
            <li><a href="#">Idées</a></li>
            <li><a href="#">À nos lecteurs</a></li>
            <li><a href="#">Nos lecteurs ont la parole</a></li>
            <hr />
            <li><strong><a href="#">L’Orient Today</a></strong></li>
          </ul>
        </div>
      </div>
    </div>
  );
}

export default ToggleMenu;
