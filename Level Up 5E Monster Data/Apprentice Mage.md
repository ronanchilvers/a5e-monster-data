---
statblock: true
name: 'Apprentice Mage'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Humanoid
cr: 1
ac: 10
hp: 11
hit_dice: '2d8 + 2'
speed: '30 ft.'
stats:
    - 10
    - 10
    - 12
    - 14
    - 10
    - 10
skillsaves:
    - { arcana: 4 }
    - { history: 4 }
senses: 'passive Perception 10'
languages: 'any one'
traits: {  }
spells:
    spells: ['The apprentice mage is a 2nd level spellcaster. Their spellcasting ability is Intelligence (spell save DC 12, +4 to hit with spell attacks). They have the following wizard spells prepared:', 'Cantrips (at will): fire bolt, light, prestidigitation', '1st-level (3 slots): detect magic, magic missile, shield']
actions:
    - { name: Dagger, desc: 'Melee or Ranged Weapon Attack: +2 to hit, reach 5 ft. or range 20/60 ft., one target. Hit: 2 (1d4) piercing damage.' }
    - { name: 'Fire Bolt (Cantrip; V, S)', desc: 'Ranged Spell Attack: +4 to hit, range 120 ft., one target. Hit: 5 (1d10) fire damage.' }
    - { name: 'Magic Missile (1st-Level; V, S)', desc: 'Three glowing arrows fly from the mage simultaneously, unerringly hitting up to 3 creatures within 120 feet. Each arrow deals 3 (1d4 + 1) force damage.' }
reactions:
    - { name: 'Shield (1st-Level; V, S)', desc: 'When the mage is hit by an attack or targeted by magic missile, they gain a +5 bonus to AC (including against the triggering attack) and immunity to magic missile. These benefits last until the start of their next turn.' }
    - { name: 'Whether a student attending a wizard college or serving a crotchety master, the apprentice mage knows just enough magic to be (slightly) dangerous', desc: 'Apprentice mage statistics can also be used to represent an older hedge wizard of limited accomplishments.' }

---
```statblock
monster: Apprentice Mage
```
