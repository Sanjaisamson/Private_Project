
import '../styles/contactForm.css'

import { Facebook, Home, Instagram, Linkedin, Mail, Phone, LocateIcon} from 'lucide-react';

export const ContactForm = () => {

    return (
        <div className='contact-section'>
            <div className='contact-section-wrapper'>
            <div className='contact-header'>
          <h3 style={{color: "white", fontFamily: "sans-serif", fontSize: 50}}>Need Help? Feel Free to Ask</h3>
        </div>
        <div className="contact-form-container">
            <div className='contact-form'>
        <form action="https://submit-form.com/6Wuu43TIY">
            <div className='form-components'>
            <label htmlFor="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Name" required={true} style={{width:300,height:30,border:1}} />
            </div>
            <div className='form-components'>
            <label htmlFor="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Email" required={true} style={{width:300,height:30,border:1}} />
            </div>
            <div className='form-components'>
            <label htmlFor="message">Message</label>
            <textarea
                id="message"
                name="message"
                required={true}
                style={{width:300,height:80,border:1, borderRadius:10}}
            ></textarea>
            </div>
            <div className='form-components'>
            <button type="submit" style={{width:250,height:30, borderRadius:10}}>Send</button>
            </div>
        </form>
        </div>
        <div className='contact-details'>
        <div className='address-section'>
        <div className='section-headers'>
            <LocateIcon color='white' style={{width:50}}/>
            <h3>
                Address
            </h3>
            </div>
            <p>
                Al-Khamisi International Investment Group
            </p>
            <p>
                Al Khuwair/Bousher/Muscat Governorate
            </p>
        </div>
        <div className='phone-section'>
        <div className='section-headers'>
            <Phone color='white' style={{width:50}}/>
            <h3>
                Call Us
            </h3>
            </div>
            <p>
                968 92165009
            </p>
        </div>
        <div className='email-section'>
            <div className='section-headers'>
            <Mail color='white' style={{width:50}}/>
            <h3>
                Email
            </h3>
            </div>
            <p>
                info@khamisiInternational.com
            </p>
        </div>
        <div className='contact-icons-group'>
            <div className="contact-icons">
                <a href="https://www.instagram.com/sanjai__samson?igsh=YmtzNGpueXdvd2Fz" target="_blank">
                <Instagram color='white' style={{width:50}}/>
                </a>
            </div>
            <div className='contact-icons'>
                <a>
                <Mail color='white' style={{width:50}}/>
                </a>
            </div>
            <div className='contact-icons'>
                <a href="https://www.facebook.com/sanjai.samson.73?mibextid=ZbWKwL" target="_blank">
                <Facebook color='white' style={{width:50}}/>
                </a>
            </div>
            <div className='contact-icons'>
                <a href="https://www.linkedin.com/in/sanjai-samson" target="_blank">
                <Linkedin color='white' style={{width:50}}/>
                </a>
            </div>
            </div>

        </div>
        </div>
        </div>
        </div>
    )

}