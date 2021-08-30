-- db e-Office postgresql
-- Table: public.surat

CREATE TABLE public.surat
(
  jenis_agenda character varying(5) NOT NULL DEFAULT 'I'::character varying,
  agenda_id character varying(30) NOT NULL DEFAULT '-'::character varying,
  status_berkas character varying(20) NOT NULL DEFAULT '-'::character varying,
  sifat_surat character varying(20) NOT NULL DEFAULT '-'::character varying,
  jenis_surat character varying(20) NOT NULL DEFAULT '-'::character varying,
  surat_no character varying(50) NOT NULL DEFAULT '{surat_no}'::character varying,
  surat_tgl date,
  surat_unit_lampiran character varying(50) NOT NULL DEFAULT '-'::character varying,
  surat_perihal text NOT NULL DEFAULT '-'::character varying,
  surat_from_ref character varying(20) NOT NULL DEFAULT '-'::character varying,
  kode_klasifikasi_arsip character(8),
  kirim_time timestamp without time zone,
  catatan_pengiriman text,
  arsip_time timestamp without time zone
)
WITH (
  OIDS=FALSE
);
ALTER TABLE public.surat
  OWNER TO postgres;

-- data table: public.surat  
SELECT 
	jenis_agenda,
	agenda_id,
	status_berkas,
	sifat_surat,
	jenis_surat,
	surat_no,
	surat_tgl,
	surat_unit_lampiran,
	surat_perihal,
	surat_from_ref,
	kode_klasifikasi_arsip,
	kirim_time,
	catatan_pengiriman,
	arsip_time
FROM SURAT
WHERE jenis_agenda='SME'
AND surat_tgl >='2017-01-01' 
AND surat_tgl <='2019-07-01'




