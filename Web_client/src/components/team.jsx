import '../styles/team.css';
import Card from '../components/teamsCard';
import glucometerImg from '../assets/images/project_glucometer_img.jpg';
import urlShortnerImg from '../assets/images/project_URL_Shortener_img.png';
import fileStorageSystemImg from '../assets/images/project_file_storage_img.jpg';
import heartAnalyzerImg from '../assets/images/project_heart_beat_img.jpg';
import womenSafetyAppImg from '../assets/images/project_women_safety_app_img.png';
import petrolPumbManagementImg from "../assets/images/project_petrol_pump_img.jpg";
import { useEffect } from 'react';

export const Teams = () => {
  useEffect(() => {
    window.scrollTo(0, 0);
  }, []);

  const projectCardData = [
    {
      title: "Mr. John Luke",
      description: "Our Chairman",
      imgUrl: 'https://www.shutterstock.com/shutterstock/photos/2014536944/display_1500/stock-photo-smiling-confident-mature-businessman-leader-looking-at-camera-standing-in-office-at-team-meeting-2014536944.jpg',
      repoURL: 'https://github.com/Sanjaisamson/Opti-Gluco-NIO-GM-Main-Project.git'
    },
    {
      title: "Mrs. Alice George",
      description: "Our Vice Chairperson ",
      imgUrl: "https://www.shutterstock.com/shutterstock/photos/2139389609/display_1500/stock-photo-image-of-young-ceo-manager-korean-working-woman-holding-tablet-and-smiling-standing-over-white-2139389609.jpg",
      repoURL: 'https://github.com/Sanjaisamson/URL_shortner.git'
    },
    {
      title: "Mr. Dizuza",
      description: "Our Managing Director",
      imgUrl: 'https://www.shutterstock.com/shutterstock/photos/2229469615/display_1500/stock-photo-portrait-of-mid-adult-business-man-standing-in-modern-office-successful-mature-entrepreneur-in-2229469615.jpg',
      repoURL: 'https://github.com/Sanjaisamson/File_Storage_System.git'
    },
    {
      title: "Mr. Fredrick George",
      description: "Our Finance Head",
      imgUrl: 'https://www.shutterstock.com/shutterstock/photos/2307212331/display_1500/stock-photo-happy-mid-aged-business-man-ceo-standing-in-office-arms-crossed-smiling-mature-confident-2307212331.jpg',
      repoURL: 'https://github.com/44R0NS4M/Heart-Beat-Analyzer.git'
    },
  ];

  return (
    <div className="teamContainer">
      <div className="team-card-glass-box">
        <div className='team-header'>
          <h3 style={{color: "white", fontFamily: "sans-serif", fontSize: 50}}>Our Members</h3>
        </div>
        <div className="team-cardbody">
          {projectCardData.map((card, index) => (
            <Card 
              key={index}
              title={card.title}
              imgUrl={card.imgUrl}
              description={card.description}
              repoURL={card.repoURL}
            />
          ))}
        </div>
      </div>
    </div>
  );
};