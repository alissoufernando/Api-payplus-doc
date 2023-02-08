import SwaggerUI from 'swagger-ui'
import 'swagger-ui/dist/swagger-ui.css';
SwaggerUI({
    dom_id: '#swagger-api',
    swagger: "2.0",
    openapi: "3.0.0",
    url: 'https://app.payplus.africa',
});
