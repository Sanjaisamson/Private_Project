import React from 'react'
import {useRef, useEffect } from "react";
import { Link } from "react-router-dom";
import "../styles/navbar.css"

export const NavbarSec = () => {

  window.addEventListener('scroll', function() {
    var navbar = document.getElementById('navbar');
    if (window.scrollY > 0) {
      navbar.style.backgroundColor = '#333030'; // Replace with your desired color
    } else {
      navbar.style.backgroundColor = 'transparent'; // Or your initial color
    }
  });

const hamburgerRef = useRef();
  const navLinksRef = useRef();
  const contactsRef = useRef()

    useEffect(() => {
        const handleHamburgerClick = () => {
          const hamburgerElement = hamburgerRef.current;
          const navLinksElement = navLinksRef.current;
          const contactsElements = contactsRef.current;
    
          if (hamburgerElement && navLinksElement && contactsElements ) {
            const links = navLinksElement.querySelectorAll(".nav-links li");
            navLinksElement.classList.toggle("open");
            links.forEach(link => {
              link.classList.toggle("fade");
            });
            hamburgerElement.classList.toggle("toggle");
            contactsElements.classList.toggle("show");
          }
        };
    
        const hamburgerElement = hamburgerRef.current;
        if (hamburgerElement) {
          hamburgerElement.addEventListener('click', handleHamburgerClick);
        }
    
        return () => {
          if (hamburgerElement) {
            hamburgerElement.removeEventListener('click', handleHamburgerClick);
          }
        };
      }, []);
  return (
    <div id='navbar' className="navbarcontainer">
      <div className='logo'>
         {/* <img src={logo} alt="image"></img> */}
         <h2 style={{color:"white"}}>LOGO Here</h2>
        </div>
        <div className="hamburger" ref={hamburgerRef}>
            <div className="line1"></div>
            <div className="line2"></div>
            <div className="line3"></div>
        </div>
        <div className="nav-links-div">
        <ul className="nav-links" ref={navLinksRef}>
            <li><Link to="/">Home</Link></li>
            <li><Link to ="#">About</Link></li>
            <li><Link to ="#">Services</Link></li>
            <li><Link to ="#">Careers</Link></li>
            <li><Link to ="#">FAQs</Link></li>
            <li><Link to ="#">Contact Us</Link></li>
            <div className='navbar-button-group'>
            
            </div>
        </ul>
        </div>
        </div>
  )
}