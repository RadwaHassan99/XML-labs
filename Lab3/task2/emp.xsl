<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
  <xsl:output method="html" encoding="UTF-8"/>

  <xsl:template match="/">
    <html>
      <head>
        <title>Employees</title>
        <link rel="stylesheet" type="text/css" href="emp.css"/>
      </head>
      <body>
        <h1>Employee List</h1>
        <xsl:apply-templates select="employees/emp"/>
      </body>
    </html>
  </xsl:template>

  <xsl:template match="emp">
    <div class="employee">
      <h2><xsl:value-of select="name"/></h2>
      <p>Email: <a href="mailto:{email}"><xsl:value-of select="email"/></a></p>
      <h3>Phone Numbers</h3>
      <ul>
        <xsl:apply-templates select="phones/phone"/>
      </ul>
      <h3>Addresses</h3>
      <ul>
        <xsl:apply-templates select="addresses/address"/>
      </ul>
    </div>
  </xsl:template>

  <xsl:template match="phone">
    <li><xsl:value-of select="."/> (<xsl:value-of select="@type"/>)</li>
  </xsl:template>

  <xsl:template match="address">
    <li><xsl:apply-templates select="Number"/> <xsl:apply-templates select="street"/>, <xsl:apply-templates select="Region"/>, <xsl:apply-templates select="Building"/>, <xsl:apply-templates select="City"/>, <xsl:apply-templates select="Country"/></li>
  </xsl:template>

</xsl:stylesheet>
