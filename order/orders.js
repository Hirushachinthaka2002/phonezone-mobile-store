function updatePhoneTypes() {
    const brand = document.getElementById('brand').value;
    const phoneTypeSelect = document.getElementById('phoneType');
    
    // Clear existing options
    phoneTypeSelect.innerHTML = '<option value="">Select a type</option>';

    if (brand === 'iphone') {
        const iphoneTypes = ['Apple iPhone 15 Pro max', 'Apple iPhone 15 Pro', 'Apple iPhone 15 Plus', 'Apple iPhone 15', 'Apple iPhone 14 Pro Max', 'Apple iPhone 14 Pro', 'Apple iPhone 14 Plus', 'Apple iPhone 14', 'Apple iPhone SE 3rd Gen', 'Apple iPhone 13 Pro Max','Apple iPhone 13 Pro', 'Apple iPhone 13 Mini', 'Apple iPhone 13', 'Apple iPhone 12 Pro Max', 'Apple iPhone 12 Pro', 'Apple iPhone 12', 'Apple iPhone SE 2nd Gen',   'Apple iPhone 11 Pro Max', 'Apple iPhone 11 Pro', 'Apple iPhone 11 ', 'Apple iPhone XS Max', 'Apple iPhone XR','Apple iPhone 8 Plus'];
        iphoneTypes.forEach(type => {
            const option = document.createElement('option');
            option.value = type.toLowerCase().replace(/ /g, '-');
            option.textContent = type;
            phoneTypeSelect.appendChild(option);
        });
    } else if (brand === 'redmi') {
        const redmiTypes = ['Redmi 12', 'Redmi 12c', 'Redmi 13c', 'Redmi A2+', 'Redmi A3', 'Redmi Note 12', 'Redmi Note 12 pro', 'Redmi Note 13', 'Redmi Note 13 pro', 'Xiaomi Black Shark 5 pro'];
        redmiTypes.forEach(type => {
            const option = document.createElement('option');
            option.value = type.toLowerCase().replace(/ /g, '-');
            option.textContent = type;
            phoneTypeSelect.appendChild(option);
        });
    } else if (brand === 'samsung') {
        const samsungTypes = ['Samsung Galaxy Z Folds', 'Samsung Galaxy Z Flip', 'Samsung Galaxy S24 Ultra', 'Samsung Galaxy S24+', 'Samsung Galaxy S24', 'Samsung Galaxy S23 FE', 'Samsung Galaxy S23', 'Samsung Galaxy S22 Ultra 5G', 'Samsung Galaxy S22 5G', 'Samsung Galaxy S21 Ultra 5G','Samsung Galaxy S21 5G', 'Samsung Galaxy A55', 'Samsung Galaxy M55', 'Samsung Galaxy M34 5G'];
        samsungTypes.forEach(type => {
            const option = document.createElement('option');
            option.value = type.toLowerCase().replace(/ /g, '-');
            option.textContent = type;
            phoneTypeSelect.appendChild(option);
        });
    }else if (brand === 'pixel') {
        const pixelTypes = ['Pixel 8a', 'Pixel 8 Pro', 'Pixel 8', 'Pixel Fold', 'Pixel 7a', 'Pixel 7 Pro', 'Pixel 7', 'Pixel 6a', 'Pixel 6 Pro', 'Pixel 6','Pixel 5a', 'Pixel 5', 'Pixel 4 XL', 'Pixel 4a 5G', 'Pixel 4a', 'Pixel 4'];
        pixelTypes.forEach(type => {
            const option = document.createElement('option');
            option.value = type.toLowerCase().replace(/ /g, '-');
            option.textContent = type;
            phoneTypeSelect.appendChild(option);
        });
    }else if (brand === 'huawei') {
        const huaweiTypes = ['Huawei Mate 60 Pro' ,'Huawei Mate 60 RS Ultimate' ,'Huawei Mate X5' , 'Huawei Nova 11 SE','Huawei Nova 12s', 'Huawei Nova Y72' , 'Huawei P60 Pro' , 'Huawei Pocket 2' ,' Huawei Pura 70','Huawei Pura 70 Ultra','Huawei Nova 12i' ,'Huawei Nova 12 Ultra' ,'Huawei Nova Y91' ,'Huawei Pura 70 Pro+'];
        huaweiTypes.forEach(type => {
            const option = document.createElement('option');
            option.value = type.toLowerCase().replace(/ /g, '-');
            option.textContent = type;
            phoneTypeSelect.appendChild(option);
        });
    }else if (brand === 'realme') {
        const realmeTypes = ['Realme 6i', 'Realme 7', 'Realme 8', 'Realme C11', 'Realme C12', 'Realme C15', 'Realme C20',   'Realme C30s', 'Realme C51', 'Realme C53', 'Realme C55', 'Realme X50 pro'];
        realmeTypes.forEach(type => {
            const option = document.createElement('option');
            option.value = type.toLowerCase().replace(/ /g, '-');
            option.textContent = type;
            phoneTypeSelect.appendChild(option);
        });
    }else if (brand === 'oppo') {
        const oppoTypes = ['Oppo A15', 'Oppo A17', 'Oppo A17k', 'Oppo A18', 'Oppo A38', 'Oppo A58', 'Oppo A77s', 'Oppo F11', 'Oppo F17', 'Oppo A78'];
        oppoTypes.forEach(type => {
            const option = document.createElement('option');
            option.value = type.toLowerCase().replace(/ /g, '-');
            option.textContent = type;
            phoneTypeSelect.appendChild(option);
        });
    }else if (brand === 'sony') {
        const sonyTypes = ['Sony Xperia 1 II', 'Sony Xperia 1 IV', 'Sony Xperia 1 V', 'Sony Xperia 1 VI', 'Sony Xperia 5 IV', 'Sony Xperia 5 V', 'Sony Xperia 10 IV', 'Sony Xperia 10 V', 'Sony Xperia 10 VI', 'Sony Xperia Pro 1'];
        sonyTypes.forEach(type => {
            const option = document.createElement('option');
            option.value = type.toLowerCase().replace(/ /g, '-');
            option.textContent = type;
            phoneTypeSelect.appendChild(option);
        });
    }else if (brand === 'honor') {
        const honorTypes = ['Honor 90', 'Honor 90 Lite', 'Honor 200 Pro', 'Honor Magic 6 Pro', 'Honor Magic V2', 'Honor X6a', 'Honor X7a', 'Honor X8a', 'Honor X9b', 'Honor X50'];
        honorTypes.forEach(type => {
            const option = document.createElement('option');
            option.value = type.toLowerCase().replace(/ /g, '-');
            option.textContent = type;
            phoneTypeSelect.appendChild(option);
        });
    }else if (brand === 'vivo') {
        const vivoTypes = ['Vivo Y02', 'Vivo Y02t', 'Vivo Y03', 'Vivo Y16', 'Vivo Y17s', 'Vivo Y27s', 'Vivo Y30', 'Vivo Y36', 'Vivo Y53s', 'Vivo V29'];
        vivoTypes.forEach(type => {
            const option = document.createElement('option');
            option.value = type.toLowerCase().replace(/ /g, '-');
            option.textContent = type;
            phoneTypeSelect.appendChild(option);
        });
    }else if (brand === 'tecno') {
        const tecnoTypes = ['Tecno Camon 20', 'Tecno Camon 20s Pro', 'Tecno Camon 30 5G' , 'Tecno Camon 30 Premier', 'Tecno Phantom V Fold', 'Tecno Pop 7' , 'Tecno Pova 5' , 'Tecno Pova 5' , 'Tecno Pova 6 Neo' ,'Tecno Pova 6 Pro' , 'Tecno Pova Neo 3' , 'Tecno Spark 10 5G' ,'Tecno Spark 10C' , 'Tecno Spark 20' , 'Tecno Spark 20 Pro 5G' , 'Tecno Spark Go 2024' ];
        tecnoTypes.forEach(type => {
            const option = document.createElement('option');
            option.value = type.toLowerCase().replace(/ /g, '-');
            option.textContent = type;
            phoneTypeSelect.appendChild(option);
        });
    }else if (brand === 'infinix') {
        const infinixTypes = ['Infinix GT 10 Pro' , 'Infinix GT 20 Pro' , 'Infinix Hot 30 5G' , 'Infinix Note 40 5G' ,'Infinix Note 40 Pro+', 'Infinix Smart 8 HD' , 'Infinix Smart 8 Plus' , 'Infinix Smart 8 Pro' ,'Infinix Zero 30' , 'Infinix Hot 40 Pro' ];
        infinixTypes.forEach(type => {
            const option = document.createElement('option');
            option.value = type.toLowerCase().replace(/ /g, '-');
            option.textContent = type;
            phoneTypeSelect.appendChild(option);
        });
    }else if (brand === 'airpods') {
        const airpodsTypes = ['Airpods H1 Processor', 'Airpods 3rd Generation', 'Airpods 2nd Generation', 'Airpods 2nd B288AP', 'Airpods 1st Generation'];
        airpodsTypes.forEach(type => {
            const option = document.createElement('option');
            option.value = type.toLowerCase().replace(/ /g, '-');
            option.textContent = type;
            phoneTypeSelect.appendChild(option);
        });
    }else if (brand === 'charger') {
        const chargerTypes = ['Apple MagSafe Charger', 'LDNIO Charger', 'IPhone Charger', 'Samsung Charger Type C', 'WiWU Charger'];
        chargerTypes.forEach(type => {
            const option = document.createElement('option');
            option.value = type.toLowerCase().replace(/ /g, '-');
            option.textContent = type;
            phoneTypeSelect.appendChild(option);
        });
    }else if (brand === 'powerbank') {
        const powerbankTypes = ['Samsung Galaxy S21', 'Samsung Galaxy Note 20', 'Samsung Galaxy A52'];
        powerbankTypes.forEach(type => {
            const option = document.createElement('option');
            option.value = type.toLowerCase().replace(/ /g, '-');
            option.textContent = type;
            phoneTypeSelect.appendChild(option);
        });
    }else if (brand === 'tempered') {
        const temperedTypes = ['Nillkin Amazing CP+ Pro Full Screen Tempered Glass For iPhone 13','Nillkin Amazing CP+ Pro Full Screen Tempered Glass For iPhone 13 Pro','Nillkin Amazing CP+ Pro Full Screen Tempered Glass For iPhone 13 Pro Max','JC Common Full Coverage Tempered Glass For iPhone 14','JC Common Full Coverage Tempered Glass For iPhone 14 Plus','JC Common Full Coverage Tempered Glass For iPhone 14 Pro','JC Common Full Coverage Tempered Glass For iPhone 14 Pro Max', 'Nillkin Amazing CP+ Pro Full Screen Tempered Glass For OnePlus 7 Pro', 'Nillkin Amazing CP+ Pro Full Screen Tempered Glass For OnePlus 7T','Nillkin Amazing CP+ Pro Full Screen Tempered Glass For OnePlus 8 Pro','Nillkin Amazing CP+ Pro Full Screen Tempered Glass For OnePlus 9' , 'Nillkin Amazing CP+ Pro Full Screen Tempered Glass For OnePlus 9R','Samsung Galaxy A55 Tempered Glass','Nillkin Amazing 3D DS+ Max Tempered Glass For Samsung Galaxy S20 Ultra','Nillkin Amazing 3D DS+ Max Tempered Glass For Samsung Galaxy S21','Nillkin Amazing 3D DS+ Max Tempered Glass For Samsung Galaxy S23 Ultra','Green Lion 3D Edge Glue Protection Ultra Tempered Samsung Galaxy S23 Tempered Glass' ];
        temperedTypes.forEach(type => {
            const option = document.createElement('option');
            option.value = type.toLowerCase().replace(/ /g, '-');
            option.textContent = type;
            phoneTypeSelect.appendChild(option);
        });
    }else if (brand === 'cover') {
        const coverTypes = ['Spigen Rugged Armor Case For Apple iphone 12' , 'Spigen Tough Armor Case For Apple iPhone 12' , 'Spigen iPhone 13 6.1" 2021 Nitro Force Case' , 'Spigen iPhone 14 Case Ultra Hybrid' , 'Atouch King Armor Anti Burst Case For iPhone 14 Pro' , 'UAG Pathfinder for Magsafe iPhone 14 Pro Max' , 'Spigen iPhone 14 Pro Case Ultra Hybrid MagFit', 'Spigen Ultra Hybrid Case for Samsung Galaxy Note 20 Ultra' , 'Spigen Liquid Crystal Case For Samsung Galaxy Note 20 Ultra', 'Spigen Slim Armor CS Case For Samsung Galaxy S20 Plus ', 'Spigen Samsung Galaxy S23 Ultra Case ultra Hybrid' , 'Spigen Ultra Hybrid Zero One Case For Samsung Galaxy S23 Ultra', 'Spigen Samsung Galaxy Z Flip 4 Air Skin Glitter Case' , 'UAG Civillion Series Case For Samsung Galaxy Z Folds'];
        coverTypes.forEach(type => {
            const option = document.createElement('option');
            option.value = type.toLowerCase().replace(/ /g, '-');
            option.textContent = type;
            phoneTypeSelect.appendChild(option);
        });
    }else if (brand === 'Headset') {
        const samsungTypes = ['H_A4TechHS28iHeadphone','H_Lenovo100StereoAnalogueHeadset','H_LenovoYogaActiveNoiseCancellationHeadphones','H_LogitechH110StereoHeadset','H_LogitechH151Headset','H_LogitechH151Headset','Havit_rgb_gaming_headset_6','Lenovo_HD116_Wireless_Headset','Logitech _G233_Prodigy_Wired_Gaming_Headset','Razer_Unveils_the_Kraken_Pro_Gaming_Headset'];
        samsungTypes.forEach(type => {
            const option = document.createElement('option');
            option.value = type.toLowerCase().replace(/ /g, '-');
            option.textContent = type;
            phoneTypeSelect.appendChild(option);
        });
    }
}

// let popup = document.getElementById("popup");

// function openPopup(){
//     popup.classList.add("open-popup");
// }
// function closePopup(){
//     popup.classList.remove("open-popup");
// }