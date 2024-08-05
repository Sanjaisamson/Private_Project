import '../styles/about.css'
import { About } from './about';
import {useNavigate} from 'react-router-dom'
import {NavbarSec} from "./navbar"
import {Banner} from "./banner"



export const Dashboard = () => {
  
  const navigate = useNavigate();

  return (
    <div className='hompage-Container'>
      <div className='nav-bar-div'>
          <NavbarSec/>
          </div>
          <div className='banner-div'>
            <Banner/>
          </div>
          <div className='banner-div'>
          <About/>
          </div>
    </div>
  )
}

