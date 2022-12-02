@extends('layouts.app')
@section('title', 'Home')
@section('content')
    @include('layouts.navbar')
    <header>
        <div class="p-12 lg:text-center h-[20rem] bg-[#0BA2D4] text-gray-700 relative flex overflow-hidden">
            <div class="lg:w-1/3 w-full lg:ml-[20rem] text-white flex items-center text-sm lg:text-xl"><marquee behavior="" direction="">Selamat datang( nama customer) di JlifePro. Silahkan pilih layanan jasa yang anda sukai</marquee></div>
            <img class="absolute w-[40rem] lg:right-[20rem]  lg:top-0 right-[-5rem] top-0"  src="{{ asset('assets/spg.png') }}" alt="">
        </div>
    </header >
    <div class="container flex justify-center m-auto mt-8 mb-8  ">
        <div class="marquee">
            <ul class="marquee-content">
                <li>
                    <a href="#"
                       class="block w-[300px] p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-white-800 dark:border-gray-700 dark:hover:bg-gray-700 relative"
                       style="
                        background-image: url('https://res.cloudinary.com/dk0z4ums3/image/upload/v1621806057/attached_image/sehat-dengan-terapi-pijat-yang-tepat.jpg');
                        background-size: 300px;
                        height: 200px;
                        ">

                    </a>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black  absolute bottom-0 bg-white p-2 rounded">
                        Message 1</h5>
                </li>
                <li>
                    <a href="#"
                       class="block w-[300px] p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-white-800 dark:border-gray-700 dark:hover:bg-gray-700 relative"
                       style="
                        background-image: url('https://images.squarespace-cdn.com/content/v1/54555287e4b0b7b149a1f423/1505099904505-P50M3Z3RNIQULR0WCU9G/Foot+Massage+1.jpg');
                        background-size: 300px;
                        height: 200px;">
                    </a>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black  absolute bottom-0 bg-white p-2 rounded">
                        reflexiologi 1 </h5>
                </li>
                <li>
                    <a href="#"
                       class="block w-[300px] p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-white-800 dark:border-gray-700 dark:hover:bg-gray-700 relative"
                       style="
                        background-image: url('https://barbertopia.co.id/wp-content/uploads/2022/01/ban-potongan-rambut-undercut-pria.jpg');
                        background-size: auto;
                        height: 200px;">
                    </a>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black  absolute bottom-0 bg-white p-2 rounded">
                        Cut Male 1</h5>
                </li>
                <li>
                    <a href="#"
                       class="block w-[300px] p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-white-800 dark:border-gray-700 dark:hover:bg-gray-700 relative"
                       style="
                        background-image: url('https://www.hadviser.com/wp-content/uploads/2020/09/6-black-hairstyle-with-long-bangs-B8WjQ-vB6P7.jpg');
                        background-size: auto;
                        background-size: 300px;
                        height: 200px;">
                    </a>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black  absolute bottom-0 bg-white p-2 rounded">
                        Cut Female 1</h5>
                </li>

            </ul>
        </div>
    </div>
    <div class="border-dashed border-b-4 border-sky-500 p-2 mt-4  pb-4">
        <div class="container m-auto">
            <h1 class="text-3xl font-semibold">Top Jasa</h1>
        </div>
    </div>


    <div class="container m-auto mt-4 mb-8 bg-white flex justify-center">
        <div class="marquee bg-white sm:bg-white">
            <ul class="marquee-content">
                <li>
                    <a href="#"
                       class="block w-[300px] p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-white-800 dark:border-gray-700 dark:hover:bg-gray-700 relative"
                       style="
                        background-image: url('https://awsimages.detik.net.id/community/media/visual/2022/02/24/ilustrasi-spa_169.jpeg?w=700&q=90');
                        background-size: 300px;
                        height: 200px;
                        ">

                    </a>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black  absolute bottom-0 bg-white p-2 rounded">
                        Message 2</h5>
                </li>
                <li>
                    <a href="#"
                       class="block w-[300px] p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-white-800 dark:border-gray-700 dark:hover:bg-gray-700 relative"
                       style="
                        background-image: url('https://img.okezone.com/content/2017/10/04/481/1788643/mengenal-11-teknik-pijat-dan-manfaatnya-dari-indonesia-hingga-tiongkok-f1UI72ukF4.jpg');
                        background-size: 300px;
                        height: 200px;">
                    </a>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black  absolute bottom-0 bg-white p-2 rounded">
                        reflexiologi 2</h5>
                </li>
                <li>
                    <a href="#"
                       class="block w-[300px] p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-white-800 dark:border-gray-700 dark:hover:bg-gray-700 relative"
                       style="
                        background-image: url('https://giovanibarbershop.com/wp-content/uploads/2020/04/model-potongan-rambut-pria.jpg');
                        background-size: auto;
                        height: 200px;">
                    </a>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black  absolute bottom-0 bg-white p-2 rounded">
                        Cut Male 2</h5>
                </li>
                <li>
                    <a href="#"
                       class="block w-[300px] p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-white-800 dark:border-gray-700 dark:hover:bg-gray-700 relative"
                       style="
                        background-image: url('https://miro.medium.com/max/700/1*gmPB4Bx_yKSEGdTEsFTKzQ.jpeg');
                        background-size: auto;
                        background-size: 300px;
                        height: 200px;">
                    </a>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black  absolute bottom-0 bg-white p-1 rounded">
                        Cut Female 2</h5>
                </li>
                <li>
                    <a href="#"
                       class="block w-[300px] p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-white-800 dark:border-gray-700 dark:hover:bg-gray-700 relative"
                       style="
                        background-image: url('https://awsimages.detik.net.id/community/media/visual/2022/02/24/ilustrasi-spa_169.jpeg?w=700&q=90');
                        background-size: 300px;
                        height: 200px;
                        ">

                    </a>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black  absolute bottom-0 bg-white p-2 rounded">
                        Message 2</h5>
                </li>
                <li>
                    <a href="#"
                       class="block w-[300px] p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-white-800 dark:border-gray-700 dark:hover:bg-gray-700 relative"
                       style="
                        background-image: url('https://img.okezone.com/content/2017/10/04/481/1788643/mengenal-11-teknik-pijat-dan-manfaatnya-dari-indonesia-hingga-tiongkok-f1UI72ukF4.jpg');
                        background-size: 300px;
                        height: 200px;">
                    </a>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black  absolute bottom-0 bg-white p-2 rounded">
                        reflexiologi 2</h5>
                </li>
                <li>
                    <a href="#"
                       class="block w-[300px] p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-white-800 dark:border-gray-700 dark:hover:bg-gray-700 relative"
                       style="
                        background-image: url('https://giovanibarbershop.com/wp-content/uploads/2020/04/model-potongan-rambut-pria.jpg');
                        background-size: auto;
                        height: 200px;">
                    </a>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black  absolute bottom-0 bg-white p-2 rounded">
                        Cut Male 2</h5>
                </li>
                <li>
                    <a href="#"
                       class="block w-[300px] p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-white-800 dark:border-gray-700 dark:hover:bg-gray-700 relative"
                       style="
                        background-image: url('https://miro.medium.com/max/700/1*gmPB4Bx_yKSEGdTEsFTKzQ.jpeg');
                        background-size: auto;
                        background-size: 300px;
                        height: 200px;">
                    </a>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black  absolute bottom-0 bg-white p-1 rounded">
                        Cut Female 2</h5>
                </li>

            </ul>
        </div>
    </div>

    <div class="border-dashed border-b-4 border-sky-500 p-2 mt-8 pb-4">
        <div class="container m-auto">
            <h1 class="text-3xl font-semibold">Hotspot</h1>
        </div>
    </div>
    <div class="container m-auto mt-4 mb-[8rem] flex justify-center">
        <div class="marquee">
            <ul class="marquee-content">
                <li>
                    <a href="#"
                       class="block w-[300px] p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-white-800 dark:border-gray-700 dark:hover:bg-gray-700 relative"
                       style="
                        background-image: url('https://awsimages.detik.net.id/community/media/visual/2022/02/24/ilustrasi-spa_169.jpeg?w=700&q=90');
                        background-size: 300px;
                        height: 200px;
                        ">

                    </a>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black  absolute bottom-0 bg-white p-2 rounded">
                        Message 2</h5>
                </li>
                <li>
                    <a href="#"
                       class="block w-[300px] p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-white-800 dark:border-gray-700 dark:hover:bg-gray-700 relative"
                       style="
                        background-image: url('data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBYWFRgWFhUYGRgaGBgYHBkaGhgYGhUYGBgZGRgaGBgcIS4lHB4rIRgYJjgmKy8xNTU1GiQ7QDs0Py40NTEBDAwMEA8QHhISHjEkJCs0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQ0NDQxNDQ0NP/AABEIALcBEwMBIgACEQEDEQH/xAAbAAABBQEBAAAAAAAAAAAAAAAEAAIDBQYBB//EADsQAAIBAwIEAwYEBQMEAwAAAAECAAMEERIhBTFBUQZhcRMigZGhsTJSwdEUQmJy8COy8YKi0uEHM8L/xAAZAQADAQEBAAAAAAAAAAAAAAABAgMABAX/xAAjEQACAgICAwADAQEAAAAAAAAAAQIRAyESMSJBUQQTcTJh/9oADAMBAAIRAxEAPwDWtVM4jkyb+Hjkt8TpbRx0zoeRlzCPZzq0BAhqBgTJqOZOtESRaQms3FjCcCedeLXJqAdp6S6bGeceLKWKgM583+Tq/G/1Rb+BaHuM3dvtNyqTM+CLciipIxnJ+s09SpiDGvEfK/JiYASJnkbOTEBLJEGxEzs7iLMNiiinMzoMBjujMXsBF7SLWZgjhREeEEh1mdDGYxI1OZ3xPZF6Z7jcfCaJWMZXohxgwNWqGi6dnldjbMx2HWWdzYtp32mlpWNOk5A77jngwuvaqRtyiQjFKimSUrtrRiuC2uKm839lbjEz4tQlTImisanSVUaRCTTkFCgI4UxOlo0vAbRxlEbpETPIy8IB5USN1Eaak4XhMR6sGSM8GqNOFzMCybXOQbVFMCwsU48U5KBHgQWGiEUo8U5KJ0QWGhgSOCR4nQJrDRGUlHfcBWq6s42U5x39ZowJDUfoIstqh4+LsHp0wgCqOUdo7xxOJEzzJV0Zu+x5xG5jcxjGMKOZ5zUYkSSBJjEeTO6TJgkFv7wUwORY5wM9BjJ+ogbpWxoxcnSJkSB8WrFAoBwWz8hj95PYX2vKkYYDO3IqeolX4tYhEcfysR8x/wCokpXG0VxwrIoyCLG5041HKn6eYlzpmQ4beq64zv5zQcLudQKE7ry8xFhP0yufFq0HYgt7d6F8zy/eE5MxPFeKa6jEHYHA9ByjylSJYcfKW+kWNGpqY7785bWC6lP92B8h+8ydpVcnYkZmiqXHsLV33zpOO+pycfT7SUZU7OnNG0o/WQLcq7HA2BIyPLbMmt6mG5zD2XGmLiiBpyCzdNugHrmamhVA0jOdh8PKPiyNumR/J/HjGPKPo06nIiIkVq+RJzLHGRkRhEkIjTMYjInMR5nCIbMDOs4RJHEa0wCLEU7mcmsFFqBHATgjhFGEBOgRRFgIApDwIg0Fe47TqkwDpEzv0EiY4nc4g7NqMyRmxE5iE6xxEgjCC0yREkq0u87iYNDdE6BHhI4JAGiFjjp8O8yf8SLjVqznBI7ofLtiWXFeJhavswxGkDO+MkjP6iZ2zop/EVgCcUyDz6OobB+OZz5JXpHfgx8Y8n7CfCt67VE1/wAyMNvLDfoZfeJLfXbvjmo1j/p5/TMoPDlsaYVmG6sSPNckdtsjE0V7fI6MgDe8MZ22z8Zoy8WmLki3lUkefWF0NQmu4FVzVXB2IbPyMp6XhldWdbH0wP3lxwKy9lVGGLAgrv5jb7RY3asvNri/4aO6qBUdj/KrH5AzyFr5i5GM7+vWem+JnK27/wBRC/AnJx35TKWyKuMY9cYj5HbIfjxqN/WScEtnd0U5Ck7nyAyf2+M0fH1VkCbbsDjsADv9YH7YYQHqD9IwASfSaKSjck36MTxThj0rnWGzrBCjsqaCSfi2P+ky68PXmsF2I3JGPJTjf5S6u7FHA1AE7gHqM88GZROHPauVDH2Z1PqbAGSzEqPMDHrvNtOympLiz0Lhz5AI5Q+Zzg98dAXYgbnvv2mlRNp1RlyR5mXG4Sr16GGNMm9nOeyjEiAiNMI9lGPThMC1I1oR7KKpS2hMVzVJyNqUdzFJ2xbLsR4iSnJBTjD0MldfXGJbCnK/iNnqEAUDWnvbw5mxIqKBFkbPmBKxm6O1HzHoMLmDnnJarbYjsRMHWrqbyEsrWnneA2lvLiimBFkxoq9nSk4VAiepiDlyYEgtolapIbmvpRm7D68h9SIjKvxIdNAn+tPvBLSDBcpJMoOKoutKzN+N1Vh03GAR25SWjaIHZ1BBcDV/UVyoI8tOn6yCrZ+00atkU6v7iOQx23hisCQJzV7Z6bdpJDxUxz6CSIgO+ZxUByrc+h7wJahUYPMbfKBy3sCjfQdb1sPp6QhyEZX6BlJ9MjMqFq4cnyHznby8yjDyMKkq2NwsH8VXxe6ZCfdp6VA6ZZVYn1976QcsMbSDxkhS4Wp0q0kfP9QAQ/QJ85SJxIqd+UzdNmx8XFfw1N/WwiEdG/eTW92CMwBmD26n+oSrp1ympT+bHw/4iWwujWUa2VX6x3ErRa9Mow2P0PMEeYMo6F35y2tbuPGXoVx9opLP2tOsyFSEydDZyGTPu7/mA2InovCH1Ukz+XHy2/SUDlWGfpLjhjgIuOQyPqZXGqZzfku4plvpjSJxHzOky5xnMRjiPJkbmYUZiJxFEYQANRNzFCNEUNAosUWPxGIY+IVFB7pwBHVqoAlTXr6jMkBuhrvmcURojgY4g7EiZ8mMuLkAc5X215qeYxprRQBCXbAgdk2ZNcP0k2tlE9ERMRMQjUGpsRhSW3TO8ffKuhi6gqo1YIyMruPqISqgCVPiSti3fHkPgTiTk9Mrjj5JGderqnaY33+cr6FXO8PVtpyyns9JRpUOr1vpyPlAHuAzDzP2EmRQ7EHdVYAj8xxnHoNoXxrg1P2etECOo1Ar7uoAZKkDmIiuVyBKSi0gf2KOvXPQDmfUyvp8OdnRDnSzqCP5tJYZz22zLKxQhNsDI7Q/g9v/AKqlj+EM3xxj9fpHjHk0gPJUWyHxzw0PQVwN6bf9jYDD5hT8J521jjB1+6T16fGew35R0dCR7ykfTb6zzGnSHvITggmUyqmRwSuFfA/hWQhpnBXmCOY9P2gacONy7OH0qCRsB7xGxIzyG0M4cAmcg/p8JV8Jvig0H+RiAe4J2Py+0RRtj8ietwatTyyH2ijmAPeXr+HPvD0+UfZX+RLC3v8AL6gcLyG/PGd5ziVgHBq0x7/8yjlUHcD8/wB5OTqVFYvQXZ18y+4Q+Q47EH5/8TH8Pr5xC7ms64Ktg7n5Yj45uO2Llx8otG4p1cQlKgMwCcVrD+ckeeD95f8ACeKazhtj9DOmOWMnRwTwSirNEYx4lbMa5liByImMjswgFFGxTGDEMc74EjUwe7qxBwa6r5MFjXfecUk8o6EY4tiRM7NsokyUSSMyzpU1WK3Q0Y2Z1uGO5947Swo8KC+sttQnCILYeKGW1PTGu28lc7QZjMjM477QqzTC5MEC5MKZ8kIOv2ml0aPYy5u+ijJlLxeoxRlbbUCN9hnpv64mkuKSIucTJcVqrUbBAK8uf6yE56o6cMN2ZqyznEvKzaKZc9FJ+QzKp7Y03G+VbkTzHdW8/PrG+IeIAUkpg+87gH+0bn54xOZq7PQb6Fwq5KpzwxOokfmO5+pl8OKl10sAdiNQ25jqP2lDY22VGR5/4IYlvpIxt+sVXFUiem7ZaUBtvMn4945UtxSWkxVnL5I7LpH3abBBtvznnXjmmXu6adEpKfi7vn/aJZOmSatMD4ZVua7DXVc56ZI+00t/T0V3B77+p5xvALLRjaS8fp6Ko3/kX7QzvTZoJJNIKOCvwmQckO2ORzL03XuYzvKJvxZ84EB6YTQvAuAT6TT8NvAVAPPf4zHXdv1HxH7Qzhd6BjJ3iyiPGRqq9Eatajn+IDv+b95nuL3ZFemoOyruO+tgP/z9Zd292Djf0MgvrCm7h2QFxj3gSCQDkZA2PMxU67KXoe3PaTK/KD0kwcGSuuPSaxWavw9eFgUY5KjIPdT+x2lu0w/Db3Q6t2OD5g8x/nabXWCAQcgjIPcGd2KXKJ52aPGRyKM1RM+JUiPigv8AExQ0a0T3d0EEobniJJwN5PxHLPpEfbWaruecUxFZ0GY5b5S01Kokee0DuQx5Qdh6CWvADOG+lI9GpmFcNtHZ/e5CGka2XVJyeUKBjQoUYAjNzFQz0S6pCzCSYkTLvCYegxkyi4fxTXduAdkAHxjvEnGVpUyqn3yMAfrMt4Lq+9WdzhVwWY9M8h6nfaSyvxKYlci+8RcdLVmpgkKp0+p6/WV9OpAuPoDV9oh2qYcfIAzlCrsJB7R1rx6LRyGGkjI+o8wZQrwhnrh3cEKTpAB5cgWzyPkMy0WvGmtvJrTH5Nos6VtgDSfhCAgJXPMZg9lU2hBbLr5n9DMjP4StMfxWiGvGJ6Kg+mf1m1dZjeK1MXT+if7RHXYvourOmBiV3i//AO0EdUEsbRsrAPF4wyEdBjrGy1oXF2ymAyIBVp4zLC1O+/WSXdHaLEaSKpWzBLqng6htCaIwces5eJtCBElhxHAwTLy2utQ5zEjJ5dDiWXD7gjbMSURlI1erEkd8iV9CvkbnMmRjiIOSappPD/EsqUY8t19Oo/zvMsj5yI6jWKMCOkpilxkSyw5Ro3yVgTJXXaVXDRnDA5BGRLkz0EeaANQMUOihsWiC4QBsxi7zl3WGrHWdUYEnZSiTUokb3CCMZxInQGFMDOvfJ3hPDa6tkiV5tE54hFq6pnbEzegRu9lm9ZRzgdfiiLzYCZXxBe1NWEOB3mXruf5iSYrdDrZvbnxPSX+bPpvKLiPi122QY8zMnUrHoJX16rnlNyYaQff8RzlnbJjuD8S10XRTyqhj5goAv1UykfhzvzzCOC2zU6yjTkOQjL3yfdPqD+veTkm0UhJKRsKVwWoAH+Q4+B3H3MhSptCHVQjqvMjJ/TErbZ8mQT7OuugtbjEJotkwGrQ6iS2z4MQJfWzQlnwQexB+UDtGkly8Uei6dvt/xMB4mqaLr+5FPyJX9JuKD5RT3VfoJ51/8ivoqUG7q4PwKEfcynbEelZoOE3RYALuSQBF4guA6KwOxGR3/wDco/CXGFQs7MAQj6c/nIwPuYXcUwtKmGO+CfgSSB9ZPJLySHxxVNjbYbD1lq1LUvKVdmdvtNDarqQGUTBJGbuLTDcu8rbrlNhd2g/zEy3GaGmMTKC2fDkdCN/LB2P1ML5GXPgPg63FStr5Kijf+sn/AMYD4g4c1tWam245q350P4T+h8wYXHViKVyaC7KtsJc2rgiZC0usGX9C6HMSUkWiwx1wdox36xj1c7iQmsNxyijGm8N3+P8ATJ57p69R+vzmpSv3nmtK6UEE7EbgjoRyM2HDeJrUAGRr7cs+YnbhnapnB+RjcZckX+qdlf7UxS5zWdRctqPOSMY2ROvnJrZR6HFAesQoecYEMmVDCJVjkpxNSE4EPUxwUd5hqA7zhyNKWvwde00rFBzYRjXFPyMKYjSfujJPwhO0k4X4bR3wdhzMva1ynaWHCLdcax129IzeugRjcuwEeFrYbYb5wVvBtEMHR3DKQy5IxqG4ztyl5Xq4MZUuJN20VVJnn1c6ajLgjORK+gN5ccdQLXJ88/Bt/uTKiop1nznJ06O+7VhoqDHOdRM7wZFh1A7Yk5Kh1sOtWxO3VXMGziRuSSAObEAfGKOaW3b/AE0/sX6gTF+NeDvcumgqPZhwc9204/2ma935AcgAPgJn+JXmmowz2PzEtBeRPKqiYg+G7lAc6SuM5B/SPp3rsoVifd5eXTE1D346zMcWCq4dPwnmOxlJwTVkcc2tF1wuruAZp7B9IweWdpjbI8t+2801pcbAGR6OtbRdVFzymY8T0/cmit6spPEZ1LHT0Tcdlf4KvfZLUPVmX/tDf+UvON01vKenYVEyUY9zzUn8pwPiAekxti+kY8yZZ0L0g5HeVT1TOWUfK0ZisjIxVlKspwynYg+cfbXzKfKb6paULxQKgw4GFddmXtnow8j9JjuP8Aq2pGvDIxwrryY88Ec1bHT5ExZQGjOw+zv1Ydj2hLpneZNXxDKHEnXrJOJVSLtto5LhlORnyxK03+YlugeRm2g2mayl4nqAAEqfMjc+u8UyftvOKP8Atl9J/ph8PVK15iBvxQZkNZ8k7wZLXUcztUUeZKT9B6cV7CMfirnkCI6naqPWSvp64zNa+BSl9AHu6x6xI9U95YIqjlC1Q9BNyS9GUG+2U60KkIp2jmHvcIn43EEr8dppso1Tcn8NwS7Y9LHvL61UIgUDEzdvxKpUOFTAJ5kYxNGTy38vjEk2+ykUl0VlzX98yKrWkFR/fMHr1DnA++JvQfZX+IE3R8f0n7j9ZQIupxNLcgVEKHt8iORlBQGkktzG2JzZY07OzDK1QXdIqYxzjEqSrub0s/0ktGrJ1osnst6L95xDioPQ4gqVInqbgyfsomX61gRM34mp+8jjqCp+G4+5+UsqNfzg/F1DJ6EH7xoy8kbJG4szLsYFdv7hlgy9IJXp850HGS2j7L6D7TQWVTzmWoPgy8ta2wnPLs7IPRpKT4HOBcUGVkNK484yvUz1mi/RpGeuBpOPL9THUnMjuX1O3kdvh/hjqSzoSOST2XnB7ghhNytBK9I06i6kYbg/Qg9COhnndgMGbvhVcgA/SVRCXZgfEHg6vbsSitVpdGUZdR2dB9xt6cpmec9/pPkTN+J/C1K5y64Sr0cDZvJwPxevMfSJKHwaOT6eSByJ0VD0hHEbCpQfRWQq3Q81cd0bqP8ADiCSTRa7JvbnznJHqnIKDZ6wlJye0KSkcb8/KSknsIg56LmdzbZ5yikdS3JHYeca9GmnvM5PlmQVqNR/xuEHYn9IG9tSU4d2cjOw2A+MFGv/AIF1eNog9xR+sDfiNersinHlITe0U/Cik92OT9YLccYdvwnA6AbQ0gOT9sNThzkg1HCjtnJhi/w9PcDUe53lBTeo/PPPrLS24aT+LJmaFT+BD8XYn3BjG+AJp6FbUisRgsNRHY9ZTW9iRsqgeZlm74YA9EPziOisb9lG1bLsc9YLVrechqVfeaQGp70IQqiMZMBv1ADN3Iha7iQ3tMlD/nKSyRuJbFKpFHStiGyY9hgwikuW7SC4t3znE5k9nYT03kjnIgiPp6QmnUBiSVMeLtCFXG8mqPqU/wCbwaqmessK9FRSGg5HPPUnrmPjjbsTLNqNGecbyN6YMIdOcZpl6OayrrUyJLbXOIa9MGCDh5Y7bRJQspHJQal3OVLvbbmZGnCiObHE69vpE0cdGllvSBEp7wqmkYABzkocSqRFsMoD95oOF3OBvy6Hf4iZgVOQB3Pbt1horDZQ3rucD1jInJm0t7wYznfbmR/ghq3QO8wj8TJOEIxnn36QtOKhV95wPUjnGJuRo+I2lO4QpUQMvMZ5qcfiVuYPpPMOPeH3tiWQ66X5v5k8nA/3Db0nofCrtXGvOc7fGPa1Q8t/X0xymcFJGWVxejx7WIp6JV8G2zEnGM9AcAeg6Tkl+qRb98TS1Xp0wNWWPxxArjix5Lhds7CKKdEdnLJtFPXvSTkk7gwYqWyN/n9YoozJk1KwyRk5J5S4seCZ3IAEUUWWkPFW9lh7OjRGWyfhzxO0+LocBE27n9J2KItj9dBlO5zjbHURlVs6yRuFPy2iimCmZB294zizkUIQ2lH1xlT12iigfRo9gKUgVVusJJAQ94op5z7PUXRnrlzqMYjdZ2KUfRkFo2ZNTr426H6Gcigh2aaTiwatjJkWRFFOw4EOVcyytaCjnFFMgNjbyqq8unlKG/v1H/EUUzCioqcUHQTgunPIAep/aKKAITQL8y+P7Rv9YfbImdTF27gnY+oiijImywpU6P5eWeeT8xLS1qUtsIuef4Ry+UUUoiDLa0rowAVR3xjGN8Sd6ig9eQ8+fLaKKMKR/wAOOx+YnYooQH//2Q==');
                        background-size: 300px;
                        height: 200px;">
                    </a>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black  absolute bottom-0 bg-white p-2 rounded">
                        reflexiologi 2</h5>
                </li>
                <li>
                    <a href="#"
                       class="block w-[300px] p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-white-800 dark:border-gray-700 dark:hover:bg-gray-700 relative"
                       style="
                        background-image: url('https://giovanibarbershop.com/wp-content/uploads/2020/04/model-potongan-rambut-pria.jpg');
                        background-size: auto;
                        height: 200px;">
                    </a>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black  absolute bottom-0 bg-white p-2 rounded">
                        Cut Male 2</h5>
                </li>
                <li>
                    <a href="#"
                       class="block w-[300px] p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-white-800 dark:border-gray-700 dark:hover:bg-gray-700 relative"
                       style="
                        background-image: url('https://img.okezone.com/content/2022/10/23/611/2692839/5-masker-untuk-hair-spa-di-rumah-atasi-masalah-rambut-kaku-hingga-berketombe-nB9MgcLOYV.JPG');
                        background-size: auto;
                        background-size: 300px;
                        height: 200px;">
                    </a>
                    <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-black  absolute bottom-0 bg-white p-1 rounded">
                        WHAT IS HAIR SPA ? </h5>
                </li>
                <li>
                    <a href="#"
                       class="block w-[300px] p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-white-800 dark:border-gray-700 dark:hover:bg-gray-700 relative"
                       style="
                        background-image: url('https://awsimages.detik.net.id/community/media/visual/2022/02/24/ilustrasi-spa_169.jpeg?w=700&q=90');
                        background-size: 300px;
                        height: 200px;
                        ">

                    </a>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black  absolute bottom-0 bg-white p-2 rounded">
                        Message 2</h5>
                </li>
                <li>
                    <a href="#"
                       class="block w-[300px] p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-white-800 dark:border-gray-700 dark:hover:bg-gray-700 relative"
                       style="
                        background-image: url('https://img.okezone.com/content/2017/10/04/481/1788643/mengenal-11-teknik-pijat-dan-manfaatnya-dari-indonesia-hingga-tiongkok-f1UI72ukF4.jpg');
                        background-size: 300px;
                        height: 200px;">
                    </a>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black  absolute bottom-0 bg-white p-2 rounded">
                        reflexiologi 2</h5>
                </li>
                <li>
                    <a href="#"
                       class="block w-[300px] p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-white-800 dark:border-gray-700 dark:hover:bg-gray-700 relative"
                       style="
                        background-image: url('https://img.okezone.com/content/2022/10/23/611/2692839/5-masker-untuk-hair-spa-di-rumah-atasi-masalah-rambut-kaku-hingga-berketombe-nB9MgcLOYV.JPG');
                        background-size: auto;
                        height: 200px;">
                    </a>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-black  absolute bottom-0 bg-white p-2 rounded">
                        Cut Male 2</h5>
                </li>
                <li>
                    <a href="#"
                       class="block w-[300px] p-6 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100 dark:bg-white-800 dark:border-gray-700 dark:hover:bg-gray-700 relative"
                       style="
                        background-image: url('https://img.okezone.com/content/2022/10/23/611/2692839/5-masker-untuk-hair-spa-di-rumah-atasi-masalah-rambut-kaku-hingga-berketombe-nB9MgcLOYV.JPG');
                        background-size: auto;
                        background-size: 300px;
                        height: 200px;">
                    </a>
                    <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-black  absolute bottom-0 bg-white p-1 rounded">
                        WHAT IS HAIR SPA ? </h5>
                </li>

            </ul>
        </div>
        @include('layouts.navbottom')
    </div>
@endsection
