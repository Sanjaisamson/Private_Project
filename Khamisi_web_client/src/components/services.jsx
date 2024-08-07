import '../styles/services.css';
import Card from '../components/servicesCard';
import glucometerImg from '../assets/images/project_glucometer_img.jpg';
import urlShortnerImg from '../assets/images/project_URL_Shortener_img.png';
import fileStorageSystemImg from '../assets/images/project_file_storage_img.jpg';
import heartAnalyzerImg from '../assets/images/project_heart_beat_img.jpg';
import womenSafetyAppImg from '../assets/images/project_women_safety_app_img.png';
import petrolPumbManagementImg from "../assets/images/project_petrol_pump_img.jpg";
import { useEffect, useState, useRef } from 'react';

export const Services = () => {
  const [currentIndex, setCurrentIndex] = useState(0);
  const sliderRef = useRef(null);

  useEffect(() => {
    window.scrollTo(0, 0);

    const interval = setInterval(() => {
      slideCards();
    }, 3000); // Slide every 3 seconds

    return () => clearInterval(interval);
  }, []);

  const projectCardData = [
    {
      title: "Communications and Information Technology",
      description: "A Non-invasive Glucometer which help to continously monitor blood glucose level of a human without finger priking",
      imgUrl: glucometerImg,
      repoURL: 'https://github.com/Sanjaisamson/Opti-Gluco-NIO-GM-Main-Project.git'
    },
    {
      title: "Education",
      description: "This is a web applivation which helps to easly shorten the long URLs. This will help you to shorten the long urls for sharing ",
      imgUrl: urlShortnerImg,
      repoURL: 'https://github.com/Sanjaisamson/URL_shortner.git'
    },
    {
      title: "Administrative Services",
      description: "This is a file storage system like a cloud storage system utilizing the local storage. Which will enable a way to store any kind of files easily.This allows users to upload and download files the same as a cloud service.",
      imgUrl: fileStorageSystemImg,
      repoURL: 'https://github.com/Sanjaisamson/File_Storage_System.git'
    },
    {
      title: "Tourism",
      description: "This is an IoT Device to check the ECG of the human heart and developed a React web application to display the ECG values and predict the condition of the heart using Machine Learning Model.",
      imgUrl: heartAnalyzerImg,
      repoURL: 'https://github.com/44R0NS4M/Heart-Beat-Analyzer.git'
    },
    {
      title: "Education",
      description: "This is a web applivation which helps to easly shorten the long URLs. This will help you to shorten the long urls for sharing ",
      imgUrl: urlShortnerImg,
      repoURL: 'https://github.com/Sanjaisamson/URL_shortner.git'
    },
    {
      title: "Administrative Services",
      description: "This is a file storage system like a cloud storage system utilizing the local storage. Which will enable a way to store any kind of files easily.This allows users to upload and download files the same as a cloud service.",
      imgUrl: fileStorageSystemImg,
      repoURL: 'https://github.com/Sanjaisamson/File_Storage_System.git'
    },
    {
      title: "Tourism",
      description: "This is an IoT Device to check the ECG of the human heart and developed a React web application to display the ECG values and predict the condition of the heart using Machine Learning Model.",
      imgUrl: heartAnalyzerImg,
      repoURL: 'https://github.com/44R0NS4M/Heart-Beat-Analyzer.git'
    }
  ];

  const slideCards = () => {
    setCurrentIndex((prevIndex) => {
      const nextIndex = (prevIndex + 1) % projectCardData.length;
      if (sliderRef.current) {
        if (nextIndex === 0) {
          // If we're at the end, quickly reset to the start without animation
          sliderRef.current.style.transition = 'none';
          sliderRef.current.style.transform = 'translateX(0)';
          // Force a reflow before re-enabling the transition
          sliderRef.current.offsetHeight;
          sliderRef.current.style.transition = 'transform 0.5s ease';
        } else {
          sliderRef.current.style.transform = `translateX(-${nextIndex * 25}%)`;
        }
      }
      return nextIndex;
    });
  };

  return (
    <div className="projectsContainer">
      <div className="projects-card-glass-box">
        <div className='project-header'>
          <h3 style={{color: "white", fontFamily: "sans-serif", fontSize: 50}}>Our Services</h3>
        </div>
        <div className="slider-container">
          <div className="slider" ref={sliderRef}>
            {projectCardData.map((card, index) => (
              <div key={index} className="card-wrapper">
                <Card 
                  title={card.title}
                  imgUrl={card.imgUrl}
                  description={card.description}
                  repoURL={card.repoURL}
                />
              </div>
            ))}
          </div>
        </div>
      </div>
    </div>
  );
};