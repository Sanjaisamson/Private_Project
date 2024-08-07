import React, { useEffect, useRef, useState } from 'react';
import "../styles/banner.css"
import {useNavigate} from 'react-router-dom'
import CONSTANTS from '../constants/constants'
import axios from 'axios';

export const Banner = () => {

    const [url, setUrl] = useState("");
    const navigate = useNavigate();
    const [counters, setCounters] = useState([
        { target: 1200000, current: 0 },
        { target: 348000000, current: 0 },
        { target: 1180000, current: 0 }
    ]);

    useEffect(() => {
        const speed = 200; // The lower the slower

        const updateCounters = () => {
            setCounters(prevCounters => 
                prevCounters.map(counter => {
                    if (counter.current < counter.target) {
                        const increment = Math.ceil(counter.target / speed);
                        return {
                            ...counter,
                            current: Math.min(counter.current + increment, counter.target)
                        };
                    }
                    return counter;
                })
            );
        };

        const timer = setInterval(updateCounters, 1);

        return () => clearInterval(timer);
    }, []);

    async function refreshAccessToken() {
        try {
          console.log("helloo dashboard")
          const response = await axios.get(
            `${CONSTANTS.API_URL}/user/refresh`,{ withCredentials: true }
          );
          if (response.status === CONSTANTS.RESPONSE_STATUS.SUCCESS) {
            const responseData = response.data;
            console.log(responseData)
            return responseData.accessToken;
          } else {
            navigate("/login");
          }
        } catch (error) {
            console.log(error)
          throw error;
        }
      }

      const handleCreateLink = async () => {
        try {
            console.log("handle create clicked")
            const accessToken = await refreshAccessToken()
            console.log(url)
          const requestData = JSON.stringify({
            url: url,
          });
          localStorage.setItem('actualUrl',url);
          const response = await axios.post(
            `${CONSTANTS.API_URL}/url/create`,
            requestData,
            {
              headers: {
                Authorization: `Bearer ${accessToken}`,
                "Content-Type": "application/json",
              },
              withCredentials: true,
            }
          );
          if (response.status === CONSTANTS.RESPONSE_STATUS.SUCCESS) {
            localStorage.setItem('shortUrl',response.data);
            console.log("response",response.data)
            navigate("/output")
          } else {
            throw new Error(CONSTANTS.RESPONSE_STATUS.FAILED);
          }
        } catch (error) {
            navigate("/dashboard")
          }
    }  


  return (
    <div className='banner-container'>
        <div className='banner-contents'>
            <div className='banner-heading-group'>
        <div className='head-1'>
            <h5>"We are here to fulfill your dreams"</h5>
        </div>
        <div className='head-2'>
            <h1>AlKhamisi International Investment</h1>
        </div>
        <div className='sub-head'>
            <p>Transforming long, ugly links into Shorten URLs and earn big money. Get paid by every person who visits your URLs.</p>
        </div>
        </div>
        {/* <div className='banner-form-group'>
        <div className='headline'>
            <h3>Shorten URL Is Just Simple</h3>
        </div>
        <div className='input-section'>
        <Input
            value={url}
            onChange={(e) => {
                setUrl(e.target.value);
                console.log("URL updated:", e.target.value);
            }} 
            type="text" 
            placeholder="Your URL here" 
            name="url" 
            required=""
                />
        <Button type="submit" onClick={handleCreateLink}>Shorten <i className="flaticon-startup"></i></Button>
        </div>
        <div className="banner-counter">
                {counters.map((counter, index) => (
                    <div className="counter-item" key={index}>
                        <h2 className="counter-title">
                            <span className="counter">{counter.current.toLocaleString()}+</span>
                        </h2>
                        <p>{index === 0 ? "Links clicked per day" : 
                            index === 1 ? "Shortened links in total" : 
                            "Happy users registered"}</p>
                    </div>
                ))}
            </div>
        </div> */}
        </div>
    </div>
  )
}
